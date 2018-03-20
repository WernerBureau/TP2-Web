<!-- Affichage -->
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/normalize.css" />
        <link rel="stylesheet" href="css/skeleton.css" />
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
        <title><?= $titre ?></title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="two-thirds column">
                    <br/><a href="index.php"><h3>TP2 - Clients et Produits </h3></a>
                </div>

                <div class="one-third column">
                    <br/><h5><a href="a_propos.html">À propos</a></h5>
                </div>
            </div>

            <div id="row">
                <div class="twelve columns">
                    <?= $contenu ?>
                </div>
            </div>

            <div id="row">Site web réalisé par Werner Burat</div>
        </div>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/autocompleteType.js"></script>
    </body>
</html>


