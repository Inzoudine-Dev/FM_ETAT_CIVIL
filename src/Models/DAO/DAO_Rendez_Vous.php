<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Maham\FmEtatCivil\Entities\Rendez_vous;

class DAO_Rendez_Vous extends DAO
{

    public function insertRendezVous(Rendez_vous $rendez_vous):void{
        $this->Insert($rendez_vous);
    }

}