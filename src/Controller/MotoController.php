<?php
 // Dans cet exam, j'ai rencontré des problemes avec le add, edit et delete. Je n'ai pas eu le temps de m'exercer dessus
 // Mon code comporte des erreurs. 
 // Pour l'ajout de motos, j'ai verifié la soumission du formulaire puis validé le formulaire et creer un nouvel 
 // objet avec les données. Puis j'ai utilisé le MotoManager pour ajouter la moto en base de données. 
 // Concernant le edit et delete, meme processus.
 // J'ai mis des include pour lier mon MotoController aux Templates ca me met des erreurs à l'affichage 

namespace Src\Controller;

use Src\Entity\Moto;
use Src\Manager\MotoManager;

class MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }

    // Route: /moto
    public function getAll()
    {
        // Récupérer toutes les motos depuis le MotoManager
        $motos = $this->motoManager->findAll();

        //  template qui affiche toutes les motos
        include("Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        // Récupérer une moto par son ID depuis le MotoManager
        $moto = $this->motoManager->findById($id);
        // template qui affiche les details d'une moto 
        include("Templates/moto/show.php");
     ;
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        // Récupérer les motos par type depuis le MotoManager
        $motos = $this->motoManager->findByType($type);

        include("Templates/moto/index.php");

    }
       // echo "ROUTE: /moto/$type   (getByType)";


    // Route: /moto/add/
    public function add() {
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
        {
            // TODO verif des param

            //SI tous les champs sont fournies
            $moto = new Moto(0, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
            $this->motoManager->add($moto);

            // Si tu as un header Location, inutile d'afficher des choses avant comme on redirige
//            echo json_encode("Ajout avec succes");
//            include(__DIR__ . "/../../Templates/moto/add.php");
            header('Location: http://localhost/examPOOzohra/index.php/moto/');
        }
        else
        {
            // Template pour ajout d'une moto 
            include("Templates/moto/add.php");
        }
    }
        
       // echo "ROUTE: /moto/add   (add)";


    // Route: /moto/edit/$id
    public function edit(int $id)
    { 

        $moto = $this->motoManager->findById($id);
        if($moto === false) {
            echo "Moto non trouvée";
            exit();
        }

        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

            // TODO verif des param
            $moto->setBrand($_POST['brand']);
            $moto->setModel($_POST['model']);
            $moto->setType($_POST['type']);
            $moto->setPrice($_POST['price']);
            $moto->setImage($_POST['image']);

            $this->motoManager->edit($moto);

            // Si tu as un header Location, inutile d'afficher des choses avant comme on redirige
//            echo json_encode("Modification avec succes");
//            include("Templates/moto/edit.php");
            header('Location: http://localhost/examPOOzohra/index.php/moto/');
        }


        // Afficher le formulaire d'édition de moto
        include("Templates/moto/edit.php");
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->motoManager->delete($id);
            header('Location: http://localhost/examPOOZohraB/index.php/moto/');
        }

    }
}
