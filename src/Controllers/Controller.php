<?php

namespace Maham\FmEtatCivil\Controllers;

use Templates\View;

class Controller
{

    public function render(string $actionVue, array $donnees=null ){

        $vue =new view($actionVue);
        $vue->viewPrendre($donnees);

    }

}