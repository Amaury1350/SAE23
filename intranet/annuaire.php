<!doctype html>
<head>
    <title>Annuaire d'entreprise</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../fonctions.php";
    bootstrap("Site SAE23");
    ?>
</head>
<body>
<?php navbar(6) ?>
<?php

// Données de l'annuaire
include "fonctions.php";

// Données de l/'annuaire
$annuaire = array(
    array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
    array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
    array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Managers"),
    array("BOISVERT", "Alita", "Technicien", createID("Alita","BOISVERT"), "Salariés"),
    array("BOSSE", "André", "Technicien", createID("André","BOSSE"), "Administrateur"),
    array("MAINVILLE", "André", "DRH",createID("André","MAINVILLE"), "Direction"),
    array("BEAUPRE", "Christabel", "Directeur",createID("Christabel","BEAUPRE"), "Managers"),
    array("LOUIS", "Patricia", "Technicien", createID("Patricia","LOUIS"), "Salariés"),
    array("MOTHE", "Geneviève", "Technicien", createID("Geneviève","MOTHE"), "Administrateur"),
    array("SANSOUCI", "Auda", "DRH",createID("Auda","SANSOUCI"), "Direction"),
    array("MOREL", "Gilles", "Directeur",createID("Gilles","MOREL"), "Managers"),
    array("RIQUIER", "Julien", "Technicien", createID("Julien","RIQUIER"), "Salariés"),
    array("CADIEUX", "Lea", "Technicien", createID("Lea","CADIEUX"), "Administrateur"),
    array("SEVIER", "Valentin", "DRH",createID("Valentin","SEVIER"), "Direction"),
    array("MERCIER", "Suzette", "Directeur",createID("Suzette","MERCIER"), "Managers"),
    array("COURTLAND", "Elene", "Technicien", createID("Elene","COURTLAND"), "Salariés"),
    array("TARDIF", "Céline", "Technicien", createID("Céline","TARDIF"), "Administrateur"),
    array("HACHE", "Carole", "DRH",createID("Carole","HACHE"), "Direction"),
    array("GUAY", "Madeleine", "Directeur",createID("Madeleine","GUAY"), "Managers"),
    array("METHOT", "Elodie", "Technicien", createID("Elodie","METHOT"), "Salariés"),
    array("PAIEN", "Raymond", "Technicien", createID("Raymond","PAIEN"), "Administrateur"),
    array("RANCOURT", "Nicolas", "DRH",createID("Nicolas","RANCOURT"), "Direction"),
    array("DESRUISSEAUX", "Astrid", "Directeur",createID("Astrid","DESRUISSEAUX"), "Managers"),
    array("AUGER", "Olivier", "Technicien", createID("Olivier","AUGER"), "Salariés"),
    array("PICARD", "Emmanuelle", "Technicien", createID("Emmanuelle","PICARD"), "Administrateur"),
    array("AUPRY", "Maurelle", "DRH",createID("Maurelle","AUPRY"), "Direction"),
    array("DROUIN", "Matthieu", "Directeur",createID("Matthieu","DROUIN"), "Managers"),
    array("BERARD", "Charline", "Technicien", createID("Charline","BERARD"), "Salariés"),
    array("GAUDREAU", "Claire", "Technicien", createID("Claire","GAUDREAU"), "Administrateur"),
    array("MERCIER", "Pauline", "DRH",createID("Pauline","MERCIER"), "Direction"),
    array("ARTOIS", "Claude", "Directeur",createID("Claude","ARTOIS"), "Managers"),
);

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
    

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>