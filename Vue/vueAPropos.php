<?php $titre = 'TP2 - À Propos'; ?>
<?php ob_start(); ?>
    <h3>À propos</h3>
    <div class="row">
        <strong>Werner Burat</strong>
        <ul>
            <li>420-4A4 MO Web et Bases de données.</li>
            <li>Hiver 2018, Collège Montmorency</li>
        </ul>
    </div>

    <div class="row">
        <div class="two-thirds column">
            <strong>Diagramme de la base de donnée actuelle utilisée par mon application:</strong>
            <img src="contenu/img/modele1.gif" alt="Diagramme de la base de donnée actuelle utilisée par mon application" width="800" height="500">
        </div>
    </div>

    <div class="row">
        <div class="two-thirds column">
                <strong>Diagramme original à partir duquel ma BD a été conçue <a href="http://www.databaseanswers.org/data_models/customers_and_products/index.htm">(source)</a> :</strong>
            <img src="contenu/img/modele2.gif" alt="http://www.databaseanswers.org/data_models/customers_and_products/index.htm" width="500" height="500">
        </div>
    </div>

<?php $contenu = ob_get_clean(); ?>
<?php require 'Vue/gabarit.php'; ?>