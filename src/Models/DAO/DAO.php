<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Config\BddConnection\MySqlConnection;

class DAO
{

    public function Insert(object $objet):void{

        $paramConnexion = new MySqlConnection('localhost', 'dbetatcivil2', 'root', '');

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


    public function selectAll(string $nomTable):array
    {
        /*paramettrage de la connexion a la bdd*/
        $paramConnexion = new MySqlConnection('localhost', 'dbetatcivil2', 'root', '');

        /*rend une connexion a la bdd basés sur le paramettrage précédent*/
        try {
            $connection = $paramConnexion->toConnect();
        } catch (\Exception $exception) {
            throw new \Exception('ORIGINE: class Manager.php ,methode selectAll() ,utilisation de la methode toConnect() - message erreur : '.$exception->getMessage());
        }

       /* if($nomTable=="articles") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjet = [];
            for ($i=0;$i<count($resultat);$i++) {

                $sous_categorie=$this->selectById('sous_categories',$resultat [$i]['sous_categories_id']);
                $tableauObjet[$i]=new Articles($resultat[$i]['id'],$resultat[$i]['nom_article'],$resultat[$i]['description_article'],$resultat[$i]['prix'],$sous_categorie);
            }
            return $tableauObjet;
        }

        if($nomTable=="categories") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjet = [];
            for ($i=0;$i<count($resultat);$i++) {

                $tableauObjet[$i]=$this->selectById('categories',$i+1);
            }
            return $tableauObjet;
        }

        if($nomTable=="sous_categories") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjet = [];
            for ($i=0;$i<count($resultat);$i++) {
                $categorie=$this->selectById('categories',$resultat[$i]['categories_id']);
                $tableauObjet[$i]= new Sous_categorie($resultat[$i]['id_sous_categories'],$resultat[$i]['nom_sous_categorie'],$categorie);
            }
            return $tableauObjet;
        }

        if($nomTable=="utilisateurs") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjet = [];
            for ($i=0;$i<count($resultat);$i++) {
                $tableauObjet[$i]= new Utilisateur($resultat[$i]['id_utilisateurs'],$resultat[$i]['nom'],$resultat[$i]['prenom'],$resultat[$i]['date_naissance'],$resultat[$i]['telephone'],$resultat[$i]['email'],$resultat[$i]['mot_de_passe'],$resultat[$i]['vendeur'],$resultat[$i]['administrateur']);
            }
            return $tableauObjet;*/
        }


    }