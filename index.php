<?php

use Src\Router;

require_once("vendor/autoload.php");

new Router();

use Src\Manager\DataBaseManager;
use Src\Manager\MotoManager;


require 'src/Controller/MotoController.php';
require 'src/Entity/Moto.php';
require 'src/Manager/DatabaseManager.php';
require 'src/Manager/MotoManager.php';

use Src\Controller\MotoController;

$motoController = new MotoController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = isset($_GET['id']) ? intval($_GET['id']) : null;

    switch ($action) {
        case 'index':
            $motoController->getAll();
            break;
        case 'view':
            $motoController->getById($id);
            break;
        case 'add':
            $motoController->add();
            break;
        case 'edit':
            $motoController->edit($id);
            break;
        case 'delete':
            $motoController->delete($id);
            break;
        default:
            echo "Action inconnue.";
            break;
    }
} else {
    $motoController->getAll();
}



$motomanager = new MotoManager();
var_dump($motomanager->findAll());

if(isset($GET ["moto_index"])) {
    $motoController= new MotoController();
    $motoController->index();
}

?>