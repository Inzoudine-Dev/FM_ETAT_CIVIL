<?php

namespace Maham\FmEtatCivil\Classes;

class Rendez_vous
{

    private int $idRendezVous;
    private string $date;
    private string $heure;
    private Guichet $guichet;

    public function __construct(int $idRendezVous,string $date,string $heure,Guichet $guichet)
    {
        $this->idRendezVous=$idRendezVous;
        $this->date=$date;
        $this->heure=$heure;
        $this->guichet=$guichet;
    }

    /**
     * @return int
     */
    public function getIdRendezVous(): int
    {
        return $this->idRendezVous;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getHeure(): string
    {
        return $this->heure;
    }

    /**
     * @return Guichet
     */
    public function getGuichet(): Guichet
    {
        return $this->guichet;
    }

    /**
     * @param int $idRendezVous
     */
    public function setIdRendezVous(int $idRendezVous): void
    {
        $this->idRendezVous = $idRendezVous;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @param string $heure
     */
    public function setHeure(string $heure): void
    {
        $this->heure = $heure;
    }

    /**
     * @param Guichet $guichet
     */
    public function setGuichet(Guichet $guichet): void
    {
        $this->guichet = $guichet;
    }

    public function __toString(): string
    {
        return 'id_rendez_vous :'.$this->getIdRendezVous().', date :'.$this->getDate().', heure :'.$this->getHeure().', guichet :'.$this->getGuichet()->__toString();
    }

}