<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 16-11-2018
 * Time: 11:05
 */

$user = "schooluser";
$pass = "schooluser123";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=schoolphp', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
