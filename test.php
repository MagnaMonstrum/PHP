<?php
if(!isset($_POST['knop'])) {
//formulier is niet verstuurd, dus formulier weergeven
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Naam: <input type="text" name="login"><br>
        Wachtwoord: <input type="text" name="pass"><br>
        <input type="submit" name="knop">
    </form>
    </body>
    </html>

    <?php
} else {
//formulier is verstuurd dus naam en wachtwoord checken/
    $user = "root";
    $pass = "root";

    try {

        $dbh = new PDO('mysql:host=localhost;port=3306;dbname=school', $user, $pass);

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    $sth = $dbh->prepare('SELECT voornaam, achternaam FROM student WHERE voornaam = :firstname AND last_name = :password LIMIT 1');
    $sth->bindParam(':firstname', $_POST['login'], PDO::PARAM_STR);
    $sth->bindParam(':password', $_POST['pass'], PDO::PARAM_STR);
    $sth->execute();
//print_r($sth->fetchAll());

    $users = $sth->fetchAll();
    if(count($users) > 0 ){
        echo "<p>user bestaat ".$users[0]['first_name']."</p>";
        $rol = $users[0]['gender'];
    }

    if($rol == 'F') {
        echo "<p>She is an Administrator</p>";
        header("Location: index.html");
    } else {
        echo "<p>He is just a normal user</p>";
    }

// foreach($sth->fetchAll() as $user) {
// echo $user['first_name'];
// }


}




?>