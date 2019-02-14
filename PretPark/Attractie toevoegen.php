<?php include("layout/header.php"); ?>

<?php
include_once("lib/Gebruiker.php");
include_once("lib/Db.php");
if (isset($_POST['attractienaam'])) {
    extract($_POST);
    $gebruiker = new Gebruiker();
    $gebruiker->setAttractienaam($attractienaam);
    $gebruiker->setAttractieomschrijving($attractieomschrijving);
    $gebruiker->setUrlfoto($urlfoto);

    var_dump($gebruiker);

    if ($gebruiker->insertAttractie()) {
        echo "Attractie is succesvol toegevoegd";
    } else {
        echo "nope";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10"></div>
        <h1 class="mb-2">Attractie toevoegen</h1>
    </div>
    <form class="form-horizontal" action="#" method="post">
        <div class="form-group">
            <label for="Attractienaam" class="col-sm-2 control-label">Attractienaam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Attractienaam" name="attractienaam"
                       placeholder="Attractienaam">
            </div>
            <div class="form-group">
                <label for="Attractieomschrijving" class="col-sm-2 control-label">Attractieomschrijving</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Attractieomschrijving" name="attractieomschrijving"
                           placeholder="Attractieomschrijving">
                </div>
            </div>
            <div class="form-group">
                <label for="Urlofoto" class="col-sm-2 control-label">Urlofoto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Urlofoto" name="urlfoto" placeholder="Urlofoto">
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                    </div>
                </div>
    </form>
</div> <!-- container -->


<?php include("layout/footer.php"); ?>
