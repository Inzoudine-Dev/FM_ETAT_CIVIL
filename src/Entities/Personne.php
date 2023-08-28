<?php

namespace Maham\FmEtatCivil\Entities;

class Personne
{

    private int $idPersonne;
    private string $nom;
    private string $prenom;
    private int $age;
    private string $telephone;
    private string $email;
    private bool $repsonsable;
    private int $nb_cni;
    private int $nb_pass;
    private int $nb_cni_pass;
    private Rendez_vous $rendez_vous;

    public function __construct(int $idPersonne,string $nom,string $prenom,int $age,string $telephone,string $email,bool $repsonsable,int $nb_cni,int $nb_pass,int $nb_cni_pass,Rendez_vous $rendez_vous)
    {

        $this->idPersonne=$idPersonne;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->telephone=$telephone;
        $this->email=$email;
        $this->repsonsable=$repsonsable;
        $this->nb_cni=$nb_cni;
        $this->nb_pass=$nb_pass;
        $this->nb_cni_pass=$nb_cni_pass;
        $this->rendez_vous=$rendez_vous;
    }

    /**
     * @return int
     */
    public function getIdPersonne(): int
    {
        return $this->idPersonne;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function isRepsonsable(): bool
    {
        return $this->repsonsable;
    }

    /**
     * @return int
     */
    public function getNbCni(): int
    {
        return $this->nb_cni;
    }

    /**
     * @return int
     */
    public function getNbPass(): int
    {
        return $this->nb_pass;
    }

    /**
     * @return int
     */
    public function getNbCniPass(): int
    {
        return $this->nb_cni_pass;
    }

    /**
     * @return Rendez_vous
     */
    public function getRendezVous(): Rendez_vous
    {
        return $this->rendez_vous;
    }

    /**
     * @param int $idPersonne
     */
    public function setIdPersonne(int $idPersonne): void
    {
        $this->idPersonne = $idPersonne;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param bool $repsonsable
     */
    public function setRepsonsable(bool $repsonsable): void
    {
        $this->repsonsable = $repsonsable;
    }

    /**
     * @param int $nb_cni
     */
    public function setNbCni(int $nb_cni): void
    {
        $this->nb_cni = $nb_cni;
    }

    /**
     * @param int $nb_pass
     */
    public function setNbPass(int $nb_pass): void
    {
        $this->nb_pass = $nb_pass;
    }

    /**
     * @param int $nb_cni_pass
     */
    public function setNbCniPass(int $nb_cni_pass): void
    {
        $this->nb_cni_pass = $nb_cni_pass;
    }

    /**
     * @param Rendez_vous $rendez_vous
     */
    public function setRendezVous(Rendez_vous $rendez_vous): void
    {
        $this->rendez_vous = $rendez_vous;
    }

    public function __toString(): string
    {
        return 'id_personnes :'.$this->getIdPersonne().', nom :'.$this->getNom().', prenom :'.$this->getPrenom().',age '.$this->getAge().', telephone :'.$this->getTelephone().', email :'.$this->getEmail().', responsable :'.$this->isRepsonsable().', nb_cni :'.$this->getNbCni().', nb_pass :'.$this->getNbPass().', nb_cni_pass :'.$this->getNbCniPass().', Rendez_vous :'.$this->getRendezVous()->__toString();
    }
}