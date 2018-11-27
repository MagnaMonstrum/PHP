<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 6-11-2018
 * Time: 11:23
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>

    </style>
</head>
<body>
<ul>
    <?php
    $dieren = array("aap", "beer", "konijn", "vis");
    $sporten = array("handbal", "korfbal", "hockey", "schaatsen");
    shuffle($sporten);
    shuffle($dieren);
    echo "<li>Er zijn " .count($sporten). " sporten in de array</li>";

    geefArrayweerAlsLijst($sporten);
    geefArrayweerAlsLijst($dieren);

    function geefArrayweerAlsLijst($arr)
    {
        foreach ($arr as $arr_element) {
            echo "<li>" . $arr_element . "</li>";
        }
    }

    ?>
</ul>
</body>
</html>