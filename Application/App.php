<?php

namespace Application;

use Config\Routes\Router;

class App
{


    private Router $router;

    public function __construct(Router $router)
    {
        $this->router=$router;
        //évite d'avoir un tableau de Routes vide au debut => message d'erreur excception Execute_app()
        $this->router->get('***', "", "");
        $this->router->post('***', "", "");

    }


    //coté Utilisateurs
    public function DefRoutesRdv()
    {

        //Ajout de tout les routes a executer en fonction d'une requtes utiisateur
        $this->router->get('/','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerAccueil', "index");
        $this->router->get('/Motifs','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerMotifs', "index");
        $this->router->post('/Motifs/Personnes','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerPersonnes', "index");
        $this->router->get('/Motifs/Personnes','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerPersonnes', "index");
        $this->router->post('/Motifs/Personnes/Confirmation','\Maham\FmEtatCivil\Controllers\Rdv\prendre\ControllerConfirmation', "index");



    }



    //Execution de l'application
    public function Execute_App(){

        if(array_key_exists('GET',$this->router->getRoutes()) && array_key_exists('POST',$this->router->getRoutes())) {
            $this->router->Run();
        }
        else{
            throw new \Exception("Auccune route(clés) GET ou Auccune route POST trouver parmis les routes du router!!");
        }
    }

}