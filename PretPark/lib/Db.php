<?php

class Db
{

    private $connectie;

    function getConnectie()
    {

        $user = 'root';
        $password = 'root';
        $db = 'pretpark';
        $host = 'localhost';
        $port = 8889;

        /* Connect to a MySQL database using driver invocation */
        $dsn = 'mysql:dbname=' . $db . ';host=' . $host . ';port=' . $port;
        $user = $user;
        $password = $password;

        try {
            $this->connectie = new PDO($dsn, $user, $password);

        } catch (PDOException $e) {
            echo 'verbinding is niet gelukt, Connection failed: ' . $e->getMessage();
        }
    return $this->connectie;
    }

}

