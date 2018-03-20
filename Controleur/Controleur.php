<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les produits du site
function accueil() {
    $produits = getProduits();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un produit
function produit($produit_id, $erreur) {
    $produit = getProduit($produit_id);
    require 'Vue/vueProduit.php';
}

// Modifier les détails sur un produit
function modifProduit($produit_id, $erreur) {
    $produit = getProduit($produit_id);
    require 'Vue/vueModifier.php';
}

// Supprimer un produit
function supprProduit($produit_id, $erreur) {
    $produit = getProduit($produit_id);
    require 'Vue/vueSupprimer.php';
}

function nouveauProduit() {
    require 'Vue/vueAjouter.php';
}

function nouveauTypeProduit() {
    require 'Vue/vueType.php';
}

// Enregistre le nouveau produit et retourne à l'accueil
function ajouter($produit) {
    setProduit($produit);
    header('Location: index.php');
}

// Enregistre le nouveau type de produit et retourne à l'accueil
function ajouterTypeProduit($typeProduit) {
    setTypeProduit($typeProduit);
    header('Location: index.php');
}

// Recherche et retourne les types pour l'autocompletion
function quelsTypes($term) {
    echo searchType($term);
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}
