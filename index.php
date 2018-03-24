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
        }        
        // Afficher un type
        else if ($_GET['action'] == 'type') {
            if (isset($_GET['type_produit_code'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $type_produit_code = intval($_GET['type_produit_code']);
                if ($type_produit_code != 0) {
                    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                    produit($type_produit_code, $erreur);
                } else
                    throw new Exception("Identifiant de produit incorrect");
            } else
                throw new Exception("Aucun identifiant de produit");
        }

        // Modifier un produit
        else if ($_GET['action'] == 'modifProduit') {
            if (isset($_GET['produit_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $produit_id = intval($_GET['produit_id']);
                if ($produit_id != 0) {
                    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                    modifProduit($produit_id, $erreur);
                } else
                    throw new Exception("Identifiant de produit incorrect");
            } else
                throw new Exception("Aucun identifiant de produit");
        }

        //Enregistrer la modification du produit
        else if ($_GET['action'] == 'enrModifProduit') {
        if (isset($_GET['id'])) {
            // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
            $id = intval($_GET['id']);
            if ($id != 0) {
                enrModifProduit($id);
            } else
                throw new Exception("Identifiant de produit incorrect");
        } else
            throw new Exception("Aucun identifiant de produit");    
        }

        // Supprimer un produit
        else if ($_GET['action'] == 'supprProduit') {
            if (isset($_GET['produit_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $produit_id = intval($_GET['produit_id']);
                if ($produit_id != 0) {
                    $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : '';
                    supprProduit($produit_id, $erreur);
                } else
                    throw new Exception("Identifiant de produit incorrect");
            } else
                throw new Exception("Aucun identifiant de produit");
        }

        // Enregistrer la suppression un produit
        else if ($_GET['action'] == 'enrSupprProduit') {
            if (isset($_POST['produit_id'])) {
                // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
                $id = intval($_POST['produit_id']);
                if ($id != 0) {
                    $erreur = isset($_POST['erreur']) ? $_POST['erreur'] : '';
                    enrSupprProduit($id, $erreur);
                } else
                    throw new Exception("Identifiant de produit incorrect");
            } else
                throw new Exception("Aucun identifiant de produit");
        }
        


        // Ajouter un produit
        else if ($_GET['action'] == 'nouveauProduit') {
            nouveauProduit();
        }

        // Ajouter un type de produit
        else if ($_GET['action'] == 'nouveauTypeProduit') {
            nouveauTypeProduit();
        }

        // Enregistrer le produit
        else if ($_GET['action'] == 'ajouter') {
            $produit = $_POST;
            ajouter($produit);
        }

        // Enregistrer le type
        else if ($_GET['action'] == 'ajouterType') {
            $type = $_POST;
            ajouterType($type);
        }

        // Cherche les types pour l'autocompletion
        else if ($_GET['action'] == 'quelsTypes') {
            quelsTypes($_GET['term']);
        }

        // Afficher la page À Propos
        else if ($_GET['action'] == 'apropos') {
            apropos();
        }

        else {
            // Fin des actions
            throw new Exception("Action non valide");
        }
    } else {
        accueil();  // action par défaut
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}