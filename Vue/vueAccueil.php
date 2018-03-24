<?php $titre = 'TP2 - Accueil'; ?>
<?php ob_start(); ?>

<table style="width:100%">   
    <tr>
        <th>Produit</th>
        <th>Prix</th>
        <th>Type</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($produits as $produit):
        ?>

        <tr>
            <td><a href="<?= "index.php?action=produit&produit_id=" . $produit['produit_id'] ?>"><?= $produit['produit_nom'] ?></a></td>
            <td><?= htmlspecialchars($produit['produit_prix']) ?>$</td>
            <td><?= htmlspecialchars($produit['type_produit_description']) ?></td>
            <td><?= htmlspecialchars($produit['produit_autre_details']) ?></td>
            <td><a href="<?= "index.php?action=modifProduit&produit_id=" . $produit['produit_id']?>">[Modifier]</a>
                <a href="<?= "index.php?action=supprProduit&produit_id=" . $produit['produit_id']?>">[Supprimer]</a></td>
        </tr>
    <?php endforeach; ?>
    
    <tr><td><a href="index.php?action=nouveauProduit"><strong>Ajouter un produit</strong></a></td>
    <td></td>
    <td><a href="index.php?action=nouveauTypeProduit"><strong>Nouveau type</strong></a></td>
    </tr>
</table>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php'; ?>