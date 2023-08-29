<?php

namespace Maham\FmEtatCivil\Models\DAO;

use Config\BddConnection\MySqlConnection;
use Maham\FmEtatCivil\Entities\Guichet;
use Maham\FmEtatCivil\Entities\Personne;
use Maham\FmEtatCivil\Entities\Rendez_vous;
use PDO;

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
            throw new \Exception('ORIGINE: class Manager.php ,methode selectAll() ,utilisation de la methode toConnect() - message erreur : ' . $exception->getMessage());
        }

        if ($nomTable == "Rendez_vous") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjetRdv = [];

            for ($i = 0; $i < count($resultat); $i++) {

                $rendez_vous = $this->selectById('Rendez_vous', $resultat [$i]['idrendez_vous']);
                $tableauObjetRdv[$i] = $rendez_vous;
            }
            return $tableauObjetRdv;
        }

        if ($nomTable == "Personnes") {
            $sql = 'SELECT * FROM ' . $nomTable;
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
            $tableauObjetRdv = [];

            for ($i = 0; $i < count($resultat); $i++) {

                $personnes = $this->selectById('Personnes', $resultat [$i]['idPersonnes']);
                $tableauObjetRdv[$i] = $personnes;
            }
            return $tableauObjetRdv;
        }

    }


    public function selectById(string $nomTable, int $id):object
    {
        /*paramettrage de la connexion a la bdd*/
        $paramConnexion = new MySqlConnection('localhost', 'dbetatcivil2', 'root', '');

        /*rend une connexion a la bdd basés sur le paramettrage précédent*/
        try {
            $connection = $paramConnexion->toConnect();
        } catch (\Exception $exception) {
            throw new \Exception('ORIGINE: class Manager.php ,methode selectAll() ,utilisation de la methode toConnect() - message erreur : ' . $exception->getMessage());
        }

        if ($nomTable == 'Rendez_vous') {

            $sql = 'SELECT * FROM ' . $nomTable . ' Where (idRendez_vous=' . $id . ')';
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);


            $sql2 = 'SELECT * FROM  guichets  Where (idGuichets=' . $resultat[0]['guichets_idguichets'] . ')';
            $requete2 = $connection->prepare($sql2);
            $requete2->execute();
            $resultat2 = $requete2->fetchAll(PDO::FETCH_ASSOC);

            $guichet=new Guichet($resultat2[0]['idguichets'],$resultat2[0]['nom_guichets']);
            $rendez_vous=new Rendez_vous($resultat[0]['idrendez_vous'],$resultat[0]['date_rdv'],$resultat[0]['heure'],$guichet);
            return $rendez_vous;

        }

        if ($nomTable == 'Personnes') {

            $sql = 'SELECT * FROM ' . $nomTable . ' Where (idPersonnes=' . $id . ')';
            $requete = $connection->prepare($sql);
            $requete->execute();
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);


            $sql2 = 'SELECT * FROM  rendez_vous  Where (idrendez_vous=' . $resultat[0]['rendez_vous_idrendez_vous'] . ')';
            $requete2 = $connection->prepare($sql2);
            $requete2->execute();
            $resultat2 = $requete2->fetchAll(PDO::FETCH_ASSOC);

            $sql3 = 'SELECT * FROM  guichets  Where (idGuichets=' . $resultat2[0]['guichets_idguichets'] . ')';
            $requete3 = $connection->prepare($sql3);
            $requete3->execute();
            $resultat3 = $requete3->fetchAll(PDO::FETCH_ASSOC);

            $guichet=new Guichet($resultat3[0]['idguichets'],$resultat3[0]['nom_guichets']);
            $rendez_vous=new Rendez_vous($resultat2[0]['idrendez_vous'],$resultat2[0]['date_rdv'],$resultat2[0]['heure'],$guichet);
            $personne=new Personne($resultat[0]['idPersonnes'],$resultat[0]['nom'],$resultat[0]['prenom'],$resultat[0]['age'],$resultat[0]['telephone'],$resultat[0]['email'],$resultat[0]['responsable'],$resultat[0]['nb_cni'],$resultat[0]['nb_pass'],$resultat[0]['nb_cni_pass'],$rendez_vous);
            return $personne;

        }
    }


}