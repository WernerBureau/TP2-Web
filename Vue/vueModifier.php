<?php $titre = "TP2 - " . $produit['produit_nom']; ?>

<?php ob_start(); ?>

<h3>Modification de <?= $produit['produit_nom'] ?></h3>

<div class="row">
    <form action="index.php?action=enrModifProduit&id=<?=$produit['produit_id'] ?>" method="post">
        <label for="produit_nom">Nom du produit: </label> <input type="text" name="produit_nom" id="produit_nom" value="<?=$produit['produit_nom'] ?>"/>
        <label for="type_produit_description">Type de produit:</label> <input type="text" name="type_produit_description" id="auto" value="<?=$produit['type_produit_description'] ?>"/>
        <label for="produit_prix">Prix du produit: </label> <input type="text" name="produit_prix" id="produit_prix" value="<?=$produit['produit_prix'] ?>"/>
        <label for="produit_autre_details">Description du produit: </label> <textarea type="text" name="produit_autre_details" id="produit_autre_details" value="<?=$produit['produit_autre_details'] ?>">Entrez une description du produit ici</textarea>
        <input type="hidden" name="produit_id" value="<?=$produit['produit_id'] ?>" /><br />
        <br/>
        <input type="submit" value="Envoyer" />
    </form>

    <form action="index.php" method="get" >
        <input type="submit" value="Annuler" />
    </form>
</div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'Vue/gabarit.php'; ?>