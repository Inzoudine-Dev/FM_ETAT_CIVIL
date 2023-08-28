<?php

namespace Maham\FmEtatCivil\Entities;

class Guichet
{

    private int $idGuichet;
    private string $nomGuichet;


    public function __construct(int $idGuichet, string $nomGuichet)
    {

        $this->idGuichet=$idGuichet;
        $this->nomGuichet=$nomGuichet;
    }


    /**
     * @return int
     */
    public function getIdGuichet(): int
    {
        return $this->idGuichet;
    }

    /**
     * @return string
     */
    public function getNomGuichet(): string
    {
        return $this->nomGuichet;
    }

    /**
     * @param int $id
     */
    public function setId(int $idGuichet): void
    {
        $this->idGuichet = $idGuichet;
    }

    /**
     * @param string $nomGuichet
     */
    public function setNomGuichet(string $nomGuichet): void
    {
        $this->nomGuichet = $nomGuichet;
    }

    public function __toString(): string
    {
        return 'id_guichet :'.$this->getIdGuichet().', nom_Guichet :'.$this->getNomGuichet();
    }

}