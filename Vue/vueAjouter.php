<?php $titre = "TP2 - Ajouter un produit"?>

<?php ob_start(); ?>

<form action="index.php?action=ajouter" method="post">
    <h3>Ajouter un produit</h3>
    <label for="produit_nom">Nom du produit: </label> <input type="text" name="produit_nom" id="produit_nom" />
    <label for="type_produit_description">Type de produit:</label> <input type="text" name="type_produit_description" id="auto" />
    <label for="produit_prix">Prix du produit (ex. 10.99) : </label> <input type="text" name="produit_prix" id="produit_prix" />
    <?= ($_GET['erreur'] == 'prix') ? '<span style="color : red;">Veuillez entrer un prix valide.</span>' : '' ?>
    <?= ($_GET['erreur'] == 'prixcourriel') ? '<span style="color : red;">Veuillez entrer un prix valide.</span>' : '' ?>
    <label for="produit_autre_details">Description du produit: </label> <textarea type="text" name="produit_autre_details" id="produit_autre_details" >Entrez une description du produit ici</textarea>
    <label for="produit_contact">Courriel contact (ex. courriel@xyz.com) : </label> <input type="text" name="produit_contact" id="produit_contact" />
    <?= ($_GET['erreur'] == 'courriel') ? '<span style="color : red;">Veuillez entrer un courriel valide.</span>' : '' ?>
    <?= ($_GET['erreur'] == 'prixcourriel') ? '<span style="color : red;">Veuillez entrer un courriel valide.</span>' : '' ?>
    <input type="hidden" name="produit_id" value="" /><br/>
    <input type="submit" value="Envoyer" />
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>