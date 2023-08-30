<?php

use Application\App;
use Config\Routes\Router;

require_once "../vendor/autoload.php";


//Recuperation de la requete de l'utilisateur par index.php
$url=$_GET['url'];

//Index.php passe la requete de l'utilisateur à l'application qui le passe au router
$application=new App($router=new Router($url));

//L'apllication prépare les routes existant dans l'application
$application->PrepareRoutesRdv();

//L'application fait router la requete de l'utilisateur par le router
$application->Execute_App();