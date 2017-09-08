<?php include 'detail.php'; ?>


  <?php
  if (!isset($_POST['nom'])): ?>
  <section class="container row">

  <h2>Nos produits</h2>
<?php

    foreach ($Produits as $cle => $valeur):?>

    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src= "<?php echo $valeur['image'] ?>">
          <form class=""  method="post">
            <input type="hidden" name="nom" value="<?php echo $valeur["titre"] ?>">
            <button class="btn-floating halfway-fab waves-effect waves-light red" type="submit"><i class="material-icons">add</i></button>
          </form>
        </div>
        <div class="card-content">
          <h3 class="card-title"><?php echo $valeur["titre"] ?></h3>
          <p><?php echo $valeur["resume"] ?></p>
        </div>
      </div>
    </div>
<?php endforeach;?>
</section>
<?php
else : ?>

<?php  $categorie= $_POST['nom'];
?>

<section class=" container row" >

  <h2><?php echo $categorie ?></h2>

<?php foreach (${$categorie} as $cle => $valeur):?>

    <div class="col s12 m4">
      <div class="card">

        <div class="card-image">
          <img src= "<?php echo $valeur['image'] ?>">
          <form class="" action="produits.html" method="post">
            <input type="hidden" name="nom" value="">
            <a class="btn-floating halfway-fab waves-effect waves-light red" ><i class="material-icons">add</i></a>
          </form>
        </div>

        <div class="card-content">
          <h3 class="card-title"><?php echo $valeur["titre"] ?></h3>
          <p><?php echo $admin["resume"] ?></p>
        </div>

        <div class="card-action">
          <a class="waves-effect waves-light btn" type="submit" href="index.php">retour</a>
        </div>

      </div>
    </div>
<?php endforeach;?>
</section>

<?php endif; ?>
