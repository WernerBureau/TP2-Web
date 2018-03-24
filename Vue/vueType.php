<?php $titre = "TP2 - Ajouter un type de produit"?>

<?php ob_start(); ?>

    <form action="index.php?action=ajouterType" method="post">
        <h3>Ajouter un type de produit</h3>
        <label for="type_produit_description">Nom du type: </label> <input type="text" name="type_produit_description" id="type_produit_description" />
        <input type="hidden" name="type_produit_code" value="" /><br />
        <input type="submit" value="Envoyer" />
    </form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>