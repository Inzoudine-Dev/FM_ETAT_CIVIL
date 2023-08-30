<?php

namespace Maham\FmEtatCivil\Models\Managers;

use Maham\FmEtatCivil\Entities\Personne;
use Maham\FmEtatCivil\Models\DAO\DAO_Personne;
use Maham\FmEtatCivil\Models\DAO\Jointures;

class ManagerPersonne
{


    public function insertPersonne(Personne $personne){
        $daoPersonne=new DAO_Personne();
        $daoPersonne->InsertPersonne($personne);
    }

    public function jointure_personne_rendezVous(){
        $jointure=new Jointures();
        $jointure->joinPersonnesRendez_vous();
    }
}