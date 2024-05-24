<?php


require_once("vendor/autoload.php");

use Src\Manager\DataBaseManager;
use Src\Entity\Moto;
use Src\Manager\MotoManager;
use Src\Controller\MotoController;
use Src\Router;

new Router()   ;

//$motoManager = new MotoManager();
//$motoManager->delete(5);
$motoController = new MotoController();

$motoController->delete(1);