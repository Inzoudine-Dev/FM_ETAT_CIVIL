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
$rdv3=new Rendez_vous(3,'26-09-2023','16h30',$guichet);
//$dao->Insert(new Personne(4, 'Inzoudine', 'MAHAMOUD', 29, '0612919635', 'maha@gmail.com', true, 1, 0, 0, $rdv));

/*$dao->Insert($guichet);
$dao->Insert($guichet2);
$dao->Insert($guichet3);*/

//$dao->Insert($rdv);
$dao->Insert($rdv2);
/*$dao->Insert($rdv3);*/