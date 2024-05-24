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
    // Route: /moto
    public function getAll()
    {
        // Récupérer toutes les motos depuis le MotoManager
        $motoManager = new MotoManager();
        $motos = $motoManager->findAll();
        $moto=[];
        //  template qui affiche toutes les motos
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        // Récupérer une moto par son ID depuis le MotoManager
        $motoManager = new MotoManager();
        $moto = $motoManager->findById($id);
        // template qui affiche les details d'une moto 
        include(__DIR__ . "/../../Templates/moto/show.php");
     ;
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        // Récupérer les motos par type depuis le MotoManager
        $motoManager = new MotoManager();
        $moto = $motoManager->findByType($type);
        if($moto) {
            echo json_encode($moto);
        }
        else {
            echo "Moto NOT FOUND";
        }
    }
       // echo "ROUTE: /moto/$type   (getByType)";


    // Route: /moto/add/
    public function add() {
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
        //SI tous les champs sont fournies
        {
            $moto = new Moto(0, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
            $this->motoManager->add($moto);
            echo json_encode("Ajout avec succes");
            include(__DIR__ . "/../../Templates/moto/add.php");
            header('Location: http://localhost/examPOOzohra/index.php/moto/');
        }
        else
        {
            // Template pour ajout d'une moto 
            include(__DIR__ . "/../../Templates/moto/add.php");
        }
    }
        
       // echo "ROUTE: /moto/add   (add)";


    // Route: /moto/edit/$id
    public function edit(int $id)
    { 
    $motoManager = new MotoManager();
    $moto = $motoManager->findById($id);

        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
            $moto = new Moto($id, $_POST['brand'], $_POST['model'], $_POST['type'], $_POST['price'], $_POST['image']);
            $this->motoManager->edit($moto);
            echo json_encode("Modification avec succes");
            include(__DIR__ . "/../../Templates/moto/edit.php");
            header('Location: /moto');
        }
        else {
            $moto = $this->motoManager->findById($id);
            if($moto) {
                echo json_encode($moto);
            }
            else {
                echo "Moto non trouvée";
            }
        }

        // Afficher le formulaire d'édition de moto
        include(__DIR__ . "/../../Templates/moto/edit.php");

        echo "ROUTE: /moto/edit/$id   (edit)";
    }

    // Route: /moto/delete/$id
    public function delete($id)
    {
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $moto = $this->motoManager->delete($id);
            echo json_encode("Supprimé avec succes");
            include(__DIR__ . "/../../Templates/moto/delete.php");
            header('Location: /moto');
        }
        else {
            echo "Moto not found";
        }
        echo "ROUTE: /moto/delete/$id   (delete)";
    }
}
