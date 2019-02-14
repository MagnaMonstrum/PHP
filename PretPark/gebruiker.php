<?php include("layout/header.php"); ?>

<?php
include_once("lib/Gebruiker.php");
include_once ("lib/Db.php");
if (isset($_POST['login'])) {
    extract($_POST);
    $gebruiker = new Gebruiker();
    $gebruiker->setVoornaam($voornaam);
    $gebruiker->setTussenvoegsel($tussenvoegsel);
    $gebruiker->setAchternaam($achternaam);
    $gebruiker->setLogin($login);
    $gebruiker->setPassword($password);

    var_dump($gebruiker);

    if($gebruiker->insertGebruiker()){
        echo "Gebruiker is succesvol toegevoegd";
    } else {
        echo "nope";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10"></div>
        <h1 class="mb-2">Registreren</h1>
    </div>
    <form class="form-horizontal" action="#" method="post">
        <div class="form-group">
            <label for="Voornaam" class="col-sm-2 control-label">Voornaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Voornaam">
            </div>
        </div>
        <div class="form-group">
            <label for="Tussenvoegsel" class="col-sm-2 control-label">Tussenvoegsel</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Tussenvoegsel" name="tussenvoegsel"
                       placeholder="Tussenvoegsel">
            </div>
        </div>
        <div class="form-group">
            <label for="Achternaam" class="col-sm-2 control-label">Achternaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Password" name="achternaam" placeholder="Achternaam">
            </div>
        </div>
        <div class="form-group">
            <label for="Login" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Login" name="login" required placeholder="Login">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required
                       placeholder="password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </div>
        </div>
    </form>
</div> <!-- container -->


<?php include("layout/footer.php"); ?>
