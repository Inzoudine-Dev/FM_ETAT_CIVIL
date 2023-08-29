<?php

namespace Maham\FmEtatCivil\Entities;

class Rendez_vous
{

    private int $idRendezVous;
    private string $date_rdv;
    private string $heure;
    private Guichet $guichet;

    public function __construct(int $idRendezVous,string $date_rdv,string $heure,Guichet $guichet)
    {
        $this->idRendezVous=$idRendezVous;
        $this->date_rdv=$date_rdv;
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
    public function getDateRdv(): string
    {
        return $this->date_rdv;
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
    public function setDate(string $date_rdv): void
    {
        $this->date_rdv = $date_rdv;
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
        return 'id_rendez_vous :'.$this->getIdRendezVous().', date :'.$this->getDateRdv().', heure :'.$this->getHeure().', guichet :'.$this->getGuichet()->__toString();
    }

}