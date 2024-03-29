<?php

namespace Config\BddConnection;

use PDO;

class MySqlConnection
{

    private string $host;
    private string $bdd_name;
    private string $username;
    private string $passeword;

    public function __construct(string $host,string $bdd_name,string $username,string $passeword)
    {
        $this->host=$host;
        $this->bdd_name=$bdd_name;
        $this->username=$username;
        $this->passeword=$passeword;

    }

    public function toConnect():PDO{
        try {

            return new PDO('mysql:host='.$this->getHost().';dbname='.$this->getBddName().';charset=utf8',$this->getUsername(), $this->getPasseword(), array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            //echo 'connexion à la bdd réussit !! ';
        }
        catch (\PDOException $e){
            throw new \Exception("-ORIGINE:BddConnection , Message d'erreur: ".$e->getMessage());
        }
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getBddName(): string
    {
        return $this->bdd_name;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPasseword(): string
    {
        return $this->passeword;
    }

    public function __toString(): string
    {
        return 'connection a une base de données mysql';
    }

}