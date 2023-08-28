<?php

use Application\App;
use Config\Routes\Router;

require_once "../vendor/autoload.php";

$url=$_GET['url'];

$application=new App($router=new Router($url));

$application->DefRoutesRdv();//definit les routes existant pour la partie utilisateurs
// avec get() ou post() du Router.

$application->Execute_App();//Compare $url aux url des routes existant(definies précédenment) et le cas échéant
// exécuter la route correspondante a $url (sinon message erreur 404 du router methode run()).