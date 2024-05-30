<!-- Appel du fichier oeuvres.php -->
<?php
    require 'oeuvres.php';
?>

<!-- Intégration du header.php -->
<?php include('header.php'); ?>

<!-- ID -->
<?php 
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $identifiant = (int) $_GET['id'];
        if (isset($oeuvres[$identifiant])) {
            $oeuvre = $oeuvres[$identifiant];
        } else {
            // Gérer le cas où l'identifiant n'existe pas dans le tableau des œuvres
            echo "Œuvre non trouvée.";
            exit;
        }
    } else {
        // Gérer le cas où l'identifiant n'est pas passé ou n'est pas valide
        echo "Identifiant invalide.";
        exit;
    }
?>


<!-- Zone correspondant à l'oeuvre -->
<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $oeuvre['image'];?>" alt="<?= $oeuvre["titre"];?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre['titre'];?></h1>
        <p class="description"><?= $oeuvre['artiste'];?></p>
        <p class="description-complete"><?= $oeuvre['description'];?></p>
    </div>
</article>

<!-- Intégration footer.php -->
<?php include('footer.php'); ?>


