<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 22-11-2018
 * Time: 13:01
 */

session_start();

$_SESSION['user'] = "jan";
echo $_SESSION['user'];

?>

<p><a href="varb.php">naar varb.php</a></p>

