<?php
/**
 * Created by PhpStorm.
 * User: Mo
 * Date: 18-9-2018
 * Time: 09:22
 */
?>

<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        text-align: center;
    }
    </style>
    <title>PHP Opdrachten</title>
<body>
<?php
//for ($i = 1; $i <= 9; $i++) {
//    echo "<img src='img/aap" . $i . ".jpg'>";
//}

//$i = 1;
//while ($i <= 9) {
//    echo "<img src='img/aap" . $i . ".jpg'>";
//    $i++;
//}
for ($i = 0; $i <= 100; $i++) {
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "*<br>";
}
?>
</body>
</head>
</html>