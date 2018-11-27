<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 27-11-2018
 * Time: 09:45
 */
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op het admingedeelte van de website</h1>";
    echo "<p><a href='login.php'>login</a></p>";
} else {
    header('location: login.php');
    //terug naar inlogscherm
}