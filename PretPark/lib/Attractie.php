<?php

class Attractie {
    private $idattractie;
    private $idgebruiker;
    private $attractienaam;
    private $attractieomschrijving;
    private $urlfoto;

    function __construct()  {

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