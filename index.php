<?php

require 'Controleur/Controleur.php';

try {
    if (isset($_GET['action'])) {

        // Afficher un produit
        if ($_GET['action'] == 'produit') {
            if (isset($_GET['produit_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $produit_id = intval($_GET['produit_id']);
                if ($produit_id != 0) {
                    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                    produit($produit_id, $erreur);
                } else
                    throw new Exception("Identifiant de produit incorrect");
            } else
                throw new Exception("Aucun identifiant de produit");

        // Ajouter un produit
        } else if ($_GET['action'] == 'nouveauProduit') {
            nouveauProduit();

        // Enregistrer le produit
        } else if ($_GET['action'] == 'ajouter') {
            $produit = $_POST;
            ajouter($produit);
  
        // CHerche les types pour l'autocomplete
        } else if ($_GET['action'] == 'quelsTypes') {
            quelsTypes($_GET['term']);

        } else {
            // Fin des actions
            throw new Exception("Action non valide");
        }
    } else {
        accueil();  // action par défaut
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}