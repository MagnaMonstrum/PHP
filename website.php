<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 23-11-2018
 * Time: 11:27
 */
session_start();

if (isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website</h1>";
} else {
    header('lovation: login.php');
    //terug naar inlogscherm
}