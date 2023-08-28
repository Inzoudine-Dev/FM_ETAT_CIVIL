<?php

namespace Maham\FmEtatCivil\Controllers\Rdv\Prendre;

use Maham\FmEtatCivil\Controllers\Controller;

class ControllerMotifs extends Controller
{

    public function index()
    {
        parent::render("Motifs", null);
    }

}