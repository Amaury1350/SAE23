<!doctype html>
<head>
    <title>Annuaire d'entreprise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include "fonctions1.php";


// Données de l'annuaire
$annuaire = array(
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("BOISVERT", "Alita", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("BOSSE", "André", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("MAINVILLE", "André", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("BEAUPRE", "Christabel", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("LOUIS", "Patricia", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("MOTHE", "Geneviève", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Salariés"),
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
);

// nbremployes($annuaire);
// Affichage du tableau
echo "<table class='table table-dark table-hover'>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Poste</th><th>Identifiant</th><th>Groupe</th><th>Nombre d'employés</th></tr>";

foreach ($annuaire as $employe) {
    echo "<tr>";
    echo "<td>".$employe[0]."</td>";
    echo "<td>".$employe[1]."</td>";
    echo "<td>".$employe[2]."</td>";
    echo "<td>".$employe[3]."</td>";
    echo "<td>".$employe[4]."</td>";
    //echo "<td>".$employe[5]."</td>";
    

    echo "</tr>";
}

echo "</table>";



?>
</body>
</html>