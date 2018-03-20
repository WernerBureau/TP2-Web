<?php $titre = "TP2 - " . $produit['produit_nom']; ?>

<?php ob_start(); ?>

<h3><?= $produit['produit_nom'] ?></h3>
<p><strong>Description:</strong> <?= $produit['produit_autre_details'] ?><br/>
<strong>Type: </strong><?= $produit['type_produit_description'] ?></p>
<hr/>

<?php $contenu = ob_get_clean(); ?>
<?php require 'Vue/gabarit.php'; ?>