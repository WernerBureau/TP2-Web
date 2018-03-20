<?php

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=Clients et Produits;charset=utf8', 'root', 'mysql', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

// Renvoie la liste de tous les produits, triés par identifiant décroissant
function getProduits() {
    $bdd = getBdd();
    $produits = $bdd->query('SELECT * FROM Produit, Ref_Produit_Type 
                             WHERE type_produit_code = produit_type_code
                             ORDER BY produit_id desc');
    return $produits;
}

// Ajouter des nouveaux produits
function setProduit($produit) {
    $bdd = getBdd();
    $querytypecode = $bdd->query("SELECT type_produit_code FROM Ref_Produit_Type WHERE type_produit_description = 'Chandail'");
    $typecode = $querytypecode->fetch(PDO::FETCH_ASSOC);
    echo $typecode;
    $result = $bdd->prepare('INSERT INTO Produit (produit_id, produit_type_code, produit_nom, produit_prix, produit_autre_details) VALUES(?, ?, ?, ?, ?)');
    $result->execute(array($produit[produit_id], $typecode, $produit[produit_nom], $produit[produit_prix], $produit[produit_autre_details]));
    return $result;
}

// Renvoie les informations sur un produit
function getProduit($produit_id) {
    $bdd = getBdd();
    $produit = $bdd->prepare('SELECT * FROM Produit 
                              LEFT JOIN Ref_Produit_Type ON type_produit_code = produit_type_code
                              WHERE produit_id=?');
    $produit->execute(array($produit_id));
    if ($produit->rowCount() == 1)
        return $produit->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun produit ne correspond à l'identifiant '$produit_id'");
}

// Supprime un produit
function deleteProduit($produit_id) {
    $bdd = getBdd();
    $result = $bdd->prepare('DELETE FROM Produit WHERE produit_id = ?');
    $result->execute(array($produit_id));
    return $result;
}

// Recherche les types répondant à l'autocomplete
function searchType($term) {
    $conn = getBdd();
    $stmt = $conn->prepare('SELECT type_produit_description FROM Ref_Produit_Type 
                            WHERE type_produit_description LIKE :term');
    $stmt->execute(array('term' => '%' . $term . '%'));

    while ($row = $stmt->fetch()) {
        $return_arr[] = $row['type_produit_description'];
    }

    /* Toss back results as json encoded array. */
    return json_encode($return_arr);
}