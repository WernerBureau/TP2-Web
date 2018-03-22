<?php $titre = "TP2 - " . $produit['produit_nom']; ?>

<?php ob_start(); ?>

<h3>Suppression de <?= $produit['produit_nom'] ?></h3>
<p><strong>Description:</strong> <?= $produit['produit_autre_details'] ?><br/>
<strong>Type: </strong><?= $produit['type_produit_description'] ?></p>
<h4>Souhaitez vous vraiment supprimer ce produit?</h4>

<hr />
<form action="index.php?action=enrSupprProduit" method="post">
    <input type="hidden" name="produit_id" value="<?= $produit['produit_id'] ?>" /><br />
    <input type="submit" value="Supprimer" />
</form>
<form action="index.php" method="get" >
    <input type="submit" value="Annuler" />
</form>

<?php $contenu = ob_get_clean(); ?>
<?php require 'Vue/gabarit.php'; ?>