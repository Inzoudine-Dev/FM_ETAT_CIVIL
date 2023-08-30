<?php

namespace Maham\FmEtatCivil\Models\Managers;

use Maham\FmEtatCivil\Entities\Rendez_vous;
use Maham\FmEtatCivil\Models\DAO\DAO_Rendez_Vous;

class ManagerRendez_vous
{

    public function insertRendezVous(Rendez_vous $rendez_vous){
        $daoRendezVous=new DAO_Rendez_Vous();
        $daoRendezVous->InsertRendezVous($rendez_vous);
    }
}