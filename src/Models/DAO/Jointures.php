<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Config\BddConnection\MySqlConnection;

class Jointures
{

    public function joinPersonnesRendez_vous():array{

        $paramConnexion = new MySqlConnection('localhost', 'dbetatcivil2', 'root', '');

        try {
            $connection = $paramConnexion->toConnect();
        } catch (\Exception $e) {
        }


        $sql= 'SELECT idPersonnes,nom,prenom,age,telephone,email,responsable,nb_cni,nb_pass,nb_cni_pass,rendez_vous_idrendez_vous,idrendez_vous,date_rdv,heure,guichets_idguichets
    FROM personnes INNER JOIN rendez_vous
    ON personnes.rendez_vous_idrendez_vous = rendez_vous.idrendez_vous';
        $requete = $connection->prepare($sql);
        $requete->execute();
        $resultat=$requete->fetchAll();
        return $resultat;

    }

}