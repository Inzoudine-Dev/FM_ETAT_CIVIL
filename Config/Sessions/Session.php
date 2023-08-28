<?php

namespace Config\Sessions;

use Maham\FmEtatCivil\Classes\Guichet;
use Maham\FmEtatCivil\Classes\Personne;
use Maham\FmEtatCivil\Classes\Rendez_vous;

class Session
{

    public function __construct()
    {
        session_start();
    }

    public function set($actionView){

        if($actionView=='donnéesMotifs') {
            if (isset($_POST['nb_personnes_name'], $_POST['quantité_cni_pass'], $_POST['quantité_pass'], $_POST['quantité_cni_pass'])) {
                $_SESSION['nombrePersonnes'] = $_POST['nb_personnes_name'];
                $_SESSION['nb_cni'] = $_POST['quantité_cni'];
                $_SESSION['nb_cni_pass'] = $_POST['quantité_cni_pass'];
                $_SESSION['nb_pass'] = $_POST['quantité_pass'];
            }
        }

        if($actionView=='donnéesPersonnes') {
            if (isset($_POST['nom1'], $_POST['prenom1'], $_POST['age1'])) {
                $_SESSION['nom1'] = $_POST['nom1'];
                $_SESSION['prenom1'] = $_POST['prenom1'];
                $_SESSION['age1'] =  $_POST['age1'];
            }
        }

    }

    public function inObject($nomObjet){
        if($nomObjet=='Personnes') {
                return $personnes=new Personne($_SESSION['nom1'],$_SESSION['prenom1']);
            }

        if($nomObjet=='Rendez_vous') {
            return $personnes=new Rendez_vous($_SESSION['nom1'],$_SESSION['prenom1']);
        }

        if($nomObjet=='Guichets') {
            return $personnes=new Guichet($_SESSION['nom1'],$_SESSION['prenom1']);
        }
    }
}