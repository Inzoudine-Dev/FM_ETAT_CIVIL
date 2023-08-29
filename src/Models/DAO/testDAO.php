<?php

use Maham\FmEtatCivil\Entities\Guichet;
use Maham\FmEtatCivil\Entities\Personne;
use Maham\FmEtatCivil\Entities\Rendez_vous;
use Maham\FmEtatCivil\Models\DAO\DAO;
require_once '../../../vendor/autoload.php';

$dao=new DAO();
//$dao->Insert(new Rendez_vous(0,'26-10-2023','16h30',new Guichet(1,'guichet1')));
$guichet=new Guichet(1,'guichet1');
$guichet2=new Guichet(2,'guichet2');
$guichet3=new Guichet(3,'guichet3');
$rdv=new Rendez_vous(1,'26-09-2023','16h30',$guichet);
$rdv2=new Rendez_vous(2,'26-09-2023','16h30',$guichet2);
$rdv3=new Rendez_vous(3,'26-09-2023','16h30',$guichet3);

$personne=new Personne(1, 'Inzoudine', 'MAHAMOUD', 29, '0612919635', 'maha@gmail1.com', true, 1, 0, 0, $rdv);
$personne2=new Personne(2, 'Inzoudine2', 'MAHAMOUD2', 39, '0612919636', 'maha@gmail2.com', false, 0, 1, 0, $rdv);
$personne3=new Personne(3, 'Inzoudine3', 'MAHAMOUD3', 49, '0612919637', 'maha@gmail3.com', false, 1, 0, 0, $rdv);

/*$dao->Insert($guichet);
$dao->Insert($guichet2);
$dao->Insert($guichet3);*/

/*$dao->Insert($rdv);
$dao->Insert($rdv2);
$dao->Insert($rdv3);*/

/*$dao->Insert($personne);
$dao->Insert($personne2);
$dao->Insert($personne3);*/

//echo $dao->selectById('Rendez_vous',3);
//echo $dao->selectById('Personnes',1);

/*for ($i = 0; $i < 3; $i++) {
    echo $dao->selectAll('Personnes')[$i]->__toString();
    echo '******';
}*/

$jointure=new \Maham\FmEtatCivil\Models\DAO\Jointures();
var_dump($jointure->joinPersonnesRendez_vous());