<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Maham\FmEtatCivil\Entities\Personne;

class DAO_Personne extends DAO
{

    public function InsertPersonne( Personne $personne):void{
        $this->Insert($personne);
    }
}