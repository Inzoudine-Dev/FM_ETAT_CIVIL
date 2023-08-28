<?php

namespace Maham\FmEtatCivil\Controllers\Rdv\Prendre;

use Config\Sessions\Session;
use Maham\FmEtatCivil\Controllers\Controller;

class ControllerPersonnes extends  Controller
{

    public function index()
    {
        $this->openSession();
        parent::render("Personnes", null);
    }

    public function openSession(){
        $session=new Session();
        $session->set('donnéesMotifs');
    }

}