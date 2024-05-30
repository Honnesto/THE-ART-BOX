<!-- Appel du fichier oeuvres.php -->
<?php
    require 'oeuvres.php';
?>

<!-- Intégration du header.php -->
<?php include('header.php'); ?>

        <!-- Création d'une boucle pour l'affichage des oeuvres -->
<div id="liste-oeuvres">
    <?php foreach ($oeuvres as $identifiant => $oeuvre) : ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $identifiant; ?>">
                <img src= "<?= $oeuvre['image'];?>" alt="<?= $oeuvre['titre'];?>">
                <h2> <?= $oeuvre['titre'];?> </h2>
                <p class="description"> <?= $oeuvre['artiste'];?> </p>
            </a>
        </article>    
    <?php endforeach; ?>
</div>

    <!-- Intégration du footer.php -->
<?php include('footer.php'); 
?>