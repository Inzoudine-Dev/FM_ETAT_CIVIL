<?php

namespace Application;

use Config\Routes\Router;

class App
{


    private Router $router;

    //contruscteur
    public function __construct(Router $router)
    {
        $this->router=$router;

    }


    //Methode permettant de preparer les routes avant leurs execution en fonction de la requete utilisateur
    public function PrepareRoutesRdv()
    {

        //Ajout dans le routeur de tout les routes a executer en fonction de la requete de l'utilisateur
        $this->router->get('/','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerAccueil', "index");
        $this->router->get('/Motifs','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerMotifs', "index");
        $this->router->post('/Motifs/Personnes','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerPersonnes', "index");
        $this->router->get('/Motifs/Personnes','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerPersonnes', "index");
        $this->router->post('/Motifs/Personnes/Confirmation','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerConfirmation', "index");
        $this->router->get('/Motifs/Personnes/Confirmation/Recapitulatifs','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerRecapitulatifs', "index");



    }



    //Methode qui demande au router de router la requete de l'utilisateur vers le bon controller
    public function Execute_App(){

        if(array_key_exists('GET',$this->router->getRoutes()) && array_key_exists('POST',$this->router->getRoutes())) {
            $this->router->Run();
        }
        else{
            throw new \Exception("Auccune route(clés) GET ou Auccune route POST trouver parmis les routes du router!!");
        }
    }

}