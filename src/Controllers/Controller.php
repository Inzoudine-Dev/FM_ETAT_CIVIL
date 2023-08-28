<?php

namespace Maham\FmEtatCivil\Controllers;

use Templates\View;

class Controller
{

    public function render(string $actionVue, array $donnees=null ){

        $vue =new View($actionVue);
        $vue->viewPrendre($donnees);

    }

}