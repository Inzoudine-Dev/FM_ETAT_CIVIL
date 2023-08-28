<?php

namespace Templates;


define('VIEWS_PRENDRE', dirname(__DIR__).DIRECTORY_SEPARATOR.'Templates\Views\Rdv\Prendre_rdv'.DIRECTORY_SEPARATOR);


class View
{



    private string $fichier;
    private string $action;


    public function __construct(string $action)
    {

        $this->fichier = 'view'. $action . '.php';
        $this->action=$action;

    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getFichier(): string
    {
        return $this->fichier;
    }


    public function viewPrendre(array $donnees = null)
    {

        if(file_exists(VIEWS_PRENDRE . $this->getFichier()) && file_exists(VIEWS_PRENDRE.'../../../Bases/baseRdv.php')) {
            ob_start();

            if($donnees){
                extract($donnees);
                //extract($donnees,EXTR_PREFIX_SAME,'dup');
            }
            require VIEWS_PRENDRE. $this->getFichier();
             $content = ob_get_clean();


            require VIEWS_PRENDRE.'../../../Bases/baseRdv.php';//de vue utilisateurs on sort une fois et on entre dans templates.
        }
        else{
            throw new \Exception("Attention erreur, la vue ou template demander n'existe pas pour Utilisateurs!!!");
        }
    }

}