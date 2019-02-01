<?php
    include("layout/header.php");
    include_once("lib/Pretpark.php");
    $Pretpark = new Pretpark();
    $Pretpark->selectAttracties();

?>

<div class="container">
    <div class="page-header">
        <h1 class="mb-5">Attractieoverzicht</h1>
    </div>

<?php foreach ($Pretpark->getAttracties() as $advertentie){?>
    <div class="row">
    <div class="col-md-8 mb-2"><img src="<?php echo $advertentie->getUrlFoto();?>" alt="Attractieplaatje"></div>
        <div class="col-md-4">
        <h3><?php echo $advertentie->getAttractieNaam();?></h3>
        <p><?php echo $advertentie->getAttractieOmschrijving();?></p>
        </div>
    </div>
<?php } ?>
</div> <!-- container -->


<?php include("layout/footer.php");?>
