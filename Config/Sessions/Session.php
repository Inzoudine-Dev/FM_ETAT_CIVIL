<?php

namespace Config\Sessions;

class Session
{

    public function __construct()
    {
        session_start();
    }

    public function set($actionView){

        if($actionView=='donnéesMotifs') {
            if (isset($_POST['nb_personnes'], $_POST['nb_cni'], $_POST['nb_pass'], $_POST['nb_cni_pass'])) {
                $_SESSION['nombrePersonnes'] = $_POST['nb_personnes'];
                $_SESSION['nb_cni'] = $_POST['nb_cni'];
                $_SESSION['nb_cni_pass'] = $_POST['nb_cni_pass'];
            }
        }

        if($actionView=='donnéesPersonnes') {
            if (isset($_POST['nom1'], $_POST['prenom1'])) {
                $_SESSION['nom1'] = $_POST['nom1'];
                $_SESSION['prenom1'] = $_POST['prenom1'];
            }
        }

    }
}