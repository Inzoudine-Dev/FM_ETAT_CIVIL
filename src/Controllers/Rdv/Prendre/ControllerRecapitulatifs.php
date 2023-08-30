<?php

namespace Maham\FmEtatCivil\Controllers\Rdv\Prendre;

use Maham\FmEtatCivil\Controllers\Controller;

class ControllerRecapitulatifs extends Controller
{

    public function index()
    {
        /*Recupere les données en session et les passes a managerPersonne et managerRendez_vous
        qui les mets en bdd*/
        parent::render("Recapitulatifs", null);
    }

}