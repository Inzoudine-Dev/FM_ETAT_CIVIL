<?php

namespace Maham\FmEtatCivil\Controllers\Rdv\Prendre;

use Maham\FmEtatCivil\Controllers\Controller;

class ControllerAccueil extends Controller
{

    public function index()
    {
        parent::render("Accueil", null);
    }
}