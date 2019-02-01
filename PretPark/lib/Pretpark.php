<?php
include_once("lib/Db.php");
include_once("lib/Attractie.php");
class Pretpark {
    private $attracties;

    function __construct(){
        $this -> attracties = array();

    }
    function getAttracties() {
        return $this->attracties;
    }
    function voegAttractieToe($attractie){
        $this -> attracties($attractie);
    }
    function selectAttracties(){
        $db = new Db();
        $conn = $db->getConnectie();
        $sth = $conn->prepare("SELECT * FROM attracties");
        $sth->execute();
        $this->attracties = $sth->fetchAll(PDO::FETCH_CLASS,"Attractie");
    }
}