<?php

namespace Maham\FmEtatCivil\Controllers\Rdv\Prendre;

use Config\Sessions\Session;
use Maham\FmEtatCivil\Controllers\Controller;


class ControllerConfirmation extends Controller
{

    public function index()
    {
        $donnees=$this->actionSession();
        parent::render("Confirmation", $donnees);
    }

    public function actionSession(){
        $session=new Session();
        $session->set('donnéesPersonnes');
        $donnees=$session->inArrayPersonnes();
        $donnees2=$session->inArrayMotifs();
        return $donnees+$donnees2;
    }
}