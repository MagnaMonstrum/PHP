<?php include("layout/header.php"); ?>
<?php
include_once("lib/Db.php");
include_once("lib/Gebruiker.php");
if (isset($_POST['login'])) {
    extract($_POST);
    $gebruiker = new Gebruiker();
    if ($gebruiker->checkLogin($password, $login)) {
        echo "Ingelogd";
    } else {
        echo "Nope";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-2 col sm-10">
            <h1 >Inloggen</h1>
        </div>
    </div>
    <form class="form-horizontal" action="#" method="post">
        <div class="form-group">
            <label for="Login" class="col-sm-2 control-label">Login</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Login" name="login" required placeholder="Login">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
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
