<?php

class Attractie {
    private $idattractie;
    private $idgebruiker;
    private $attractienaam;
    private $attractieomschrijving;
    private $urlfoto;

    function __construct()  {

    }
    function getGebruikerById(){
        $db = new Db();
        $conn = $db->getConnectie();
        $sth = $conn->prepare("SELECT * FROM gebruiker WHERE idgebruiker = " .$this->idgebruiker);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,'Gebruiker');
        return $sth->fetch();
    }
    function getIdAttractie() {
        return $this->idattractie;
    }
    function getIdGebruiker() {
        return $this->idgebruiker;
    }
    function getAttractieNaam() {
        return $this->attractienaam;
    }
    function getAttractieOmschrijving() {
        return $this->attractieomschrijving;
    }
    function getUrlFoto() {
        return $this->urlfoto;
    }
}