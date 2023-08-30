<?php


/*use MODELS\classes\Guichet;*/
use MODELS\ManagerCommun;
use MODELS\managers\ManagerRendez_vous;

require "../vendor/autoload.php";

$action = $_REQUEST["action"];

$dateRdv = $_GET['date_rdv'];

$heureRdv = $_GET['heure_rdv'];

/*
$guichet1=new Guichet(1,"guichet1");
$guichet2=new Guichet(2,"guichet2");

$id_guichet1=$guichet1->getId();
$id_guichet2=$guichet2->getId();*/


$dateDuJour1=date("d-m-Y");
$d1=strtotime($dateDuJour1);
$d2=strtotime($dateRdv);
//$dateDuJour="18/01/2023";


if($action=="act1" ) {

    if ($d2 <= $d1) {
        echo 'false';
    }

    if ($d2 > $d1) {
        echo 'true';
    }

}

/*existance rdv*/
if($action=="act2" ) {

    $managerRdv = new ManagerRendez_vous();

    if($managerRdv->occurenceRdv($_GET['date_rdv'],$_GET['heure_rdv'])==2){
        echo 'ok!!';
    }

    if($managerRdv->occurenceRdv($_GET['date_rdv'],$_GET['heure_rdv'])==0){
        echo 'okg1_2!!';
    }


    if($managerRdv->occurenceRdv($_GET['date_rdv'],$_GET['heure_rdv'])==1 && $managerRdv->GuichetRdv($_GET['date_rdv'],$_GET['heure_rdv'])==1 ){
        echo 'okg1!!';
    }

    if($managerRdv->occurenceRdv($_GET['date_rdv'],$_GET['heure_rdv'])==1 && $managerRdv->GuichetRdv($_GET['date_rdv'],$_GET['heure_rdv'])==2){
        echo 'okg2!!';
    }

}

