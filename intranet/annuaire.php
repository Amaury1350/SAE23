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
<main>
    <div class="container mt-4">
        <div class="pt-5 my-2 text-center">
            <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Liste des utilisateurs</h1>
            <div class="col-lg-6 mx-auto">
                <h4 class="lead mb-4">Voici la liste des utilisateurs</h4>
                <br>
            </div>
        </div>
        <?php
            // Données de l/'annuaire
            $annuaire = array(
                array("DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
                array("PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
                array("MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Direction"),
                array("BOISVERT", "Alita", "Hot liner", createID("Alita","BOISVERT"), "Salarié"),
                array("BOSSE", "André", "Administrateur réseaux", createID("André","BOSSE"), "Administrateur"),
                array("MAINVILLE", "André", "Ingénieur cloud computing",createID("André","MAINVILLE"), "Manager"),
                array("BEAUPRE", "Christabel", "Administrateur système",createID("Christabel","BEAUPRE"), "Administrateur"),
                array("LOUIS", "Patricia", "Ingénieure cloud computing", createID("Patricia","LOUIS"), "Salarié"),
                array("MOTHE", "Geneviève", "Technicien", createID("Geneviève","MOTHE"), "Salarié"),
                array("SANSOUCI", "Auda", "Développeur web",createID("Auda","SANSOUCI"), "Salarié"),
                array("MOREL", "Gilles", "Programmeur",createID("Gilles","MOREL"), "Salarié"),
                array("RIQUIER", "Julien", "Technicien", createID("Julien","RIQUIER"), "Salarié"),
                array("CADIEUX", "Lea", "Chef de projet", createID("Lea","CADIEUX"), "Direction"),
                array("SEVIER", "Valentin", "Architecte logiciel",createID("Valentin","SEVIER"), "Direction"),
                array("MERCIER", "Suzette", "Programmeur",createID("Suzette","MERCIER"), "Manager"),
                array("COURTLAND", "Elene", "Technicien", createID("Elene","COURTLAND"), "Salarié"),
                array("TARDIF", "Céline", "Développeur web", createID("Céline","TARDIF"), "Administrateur"),
                array("HACHE", "Carole", "Architecte logiciel",createID("Carole","HACHE"), "Salarié"),
                array("GUAY", "Madeleine", "Architecte cloud",createID("Madeleine","GUAY"), "Salarié"),
                array("METHOT", "Elodie", "Technicien", createID("Elodie","METHOT"), "Salarié"),
                array("PAIEN", "Raymond", "Ingénieur cloud computing", createID("Raymond","PAIEN"), "Administrateur"),
                array("RANCOURT", "Nicolas", "Architecte cloud",createID("Nicolas","RANCOURT"), "Salarié"),
                array("DESRUISSEAUX", "Astrid", "Hot liner",createID("Astrid","DESRUISSEAUX"), "Salarié"),
                array("AUGER", "Olivier", "Technicien", createID("Olivier","AUGER"), "Salarié"),
                array("PICARD", "Emmanuelle", "Responsable de la sécurité des systèmes d'information", createID("Emmanuelle","PICARD"), "Administrateur"),
                array("AUPRY", "Maurelle", "Hot liner",createID("Maurelle","AUPRY"), "Salarié"),
                array("DROUIN", "Matthieu", "Directeur technique",createID("Matthieu","DROUIN"), "Direction"),
                array("BERARD", "Charline", "Responsable informatique", createID("Charline","BERARD"), "Manager"),
                array("GAUDREAU", "Claire", "Comptable", createID("Claire","GAUDREAU"), "Salarié"),
                array("MERCIER", "Pauline", "Technicien",createID("Pauline","MERCIER"), "Salarié"),
                array("ARTOIS", "Claude", "Comptable",createID("Claude","ARTOIS"), "Salarié"),
            );

            // Affichage du tableau
            echo "<table class='table table-striped table-hover table-bordered'>";
            echo "<thead><tr><th>Nom</th><th>Prénom</th><th>Poste</th><th>Identifiant</th><th>Groupe</th></tr></thead>";

            foreach ($annuaire as $colonne) {
                echo "<tr>";
                echo "<td>".$colonne[0]."</td>";
                echo "<td>".$colonne[1]."</td>";
                echo "<td>".$colonne[2]."</td>";
                echo "<td>".$colonne[3]."</td>";
                echo "<td>".$colonne[4]."</td>";
                

                echo "</tr>";
            }

            echo "</table>";

        ?>
    </div>
</body>
</html>