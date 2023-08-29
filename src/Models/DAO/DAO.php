<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Config\BddConnection\MySqlConnexion;

class DAO
{

    public function Insert(object $objet):void{

        $paramConnexion = new MySqlConnexion('localhost', 'dbetatcivil2', 'root', '');

        try {
            $connection = $paramConnexion->toConnect();
        } catch (\Exception $e) {
        }

        if(get_class($objet)=='Maham\FmEtatCivil\Entities\Rendez_vous'){
            $nomTable='Rendez_vous';

            $sql = 'INSERT INTO '.$nomTable.'(date_rdv,heure,guichets_idGuichets) VALUES (?,?,?)';
            $date_rdv = $objet->getDateRdv();
            $heure = $objet->getHeure();
            $guichets_idGuichets = $objet->getGuichet()->getIdGuichet();
            $requete = $connection->prepare($sql);
            $requete->bindParam(1, $date_rdv);
            $requete->bindParam(2, $heure);
            $requete->bindParam(3, $guichets_idGuichets );
            $requete->execute();
            $requete->fetchAll();

        }

        if(get_class($objet)=='Maham\FmEtatCivil\Entities\Personne'){
            $nomTable='Personnes';

            $sql = 'INSERT INTO '.$nomTable.'(nom,prenom,age,telephone,email,responsable,nb_cni,nb_pass,nb_cni_pass,rendez_vous_idrendez_vous) VALUES (?,?,?,?,?,?,?,?,?,?)';
            $nom = $objet->getNom();
            $prenom = $objet->getPrenom();
            $age = $objet->getAge();
            $telephone= $objet->getTelephone();
            $email= $objet->getEmail();
            $responsable= $objet->isRepsonsable();
            $nb_cni= $objet->getNbCni();
            $nb_pass= $objet->getNbPass();
            $nb_cni_pass= $objet->getNbCniPass();
            $rendez_vous_idrendez_vous= $objet->getRendezVous()->getIdRendezVous();
            $requete = $connection->prepare($sql);
            $requete->bindParam(1, $nom);
            $requete->bindParam(2, $prenom);
            $requete->bindParam(3, $age );
            $requete->bindParam(4, $telephone );
            $requete->bindParam(5, $email );
            $requete->bindParam(6, $responsable );
            $requete->bindParam(7, $nb_cni );
            $requete->bindParam(8, $nb_pass );
            $requete->bindParam(9, $nb_cni_pass );
            $requete->bindParam(10, $rendez_vous_idrendez_vous);
            $requete->execute();
            $requete->fetchAll();

        }

        if(get_class($objet)=='Maham\FmEtatCivil\Entities\Guichet'){
            $nomTable='Guichets';
            $sql = 'INSERT INTO '.$nomTable.'(nom_Guichets) VALUES (?)';
            $nom_Guichets = $objet->getNomGuichet();
            $requete = $connection->prepare($sql);
            $requete->bindParam(1, $nom_Guichets);
            $requete->execute();
            $requete->fetchAll();

        }

    }

}