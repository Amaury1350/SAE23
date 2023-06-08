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
                array("image/profil1.jpg", "DUHAMEL", "Louis", "Technicien", createID("Louis","DUHAMEL"), "Administrateur"),
                array("image/profil2.jpg", "PAUL", "Pierre", "DRH",createID("Pierre","PAUL"), "Direction"),
                array("image/profil5.jpg", "MARSEAU", "François", "Directeur",createID("François","MARSEAU"), "Direction"),
                array("image/profil16.jpg", "BOISVERT", "Alita", "Hot liner", createID("Alita","BOISVERT"), "Salarié"),
                array("image/profil3.jpg", "BOSSE", "André", "Administrateur réseaux", createID("André","BOSSE"), "Administrateur"),
                array("image/profil4.jpg", "MAINVILLE", "André", "Ingénieur cloud computing",createID("André","MAINVILLE"), "Manager"),
                array("image/profil17.jpg", "BEAUPRE", "Christabel", "Administrateur système",createID("Christabel","BEAUPRE"), "Administrateur"),
                array("image/profil18.jpg", "LOUIS", "Patricia", "Ingénieure cloud computing", createID("Patricia","LOUIS"), "Salarié"),
                array("image/profil19.jpg", "MOTHE", "Geneviève", "Technicien", createID("Geneviève","MOTHE"), "Salarié"),
                array("image/profil20.jpg", "SANSOUCI", "Auda", "Développeur web",createID("Auda","SANSOUCI"), "Salarié"),
                array("image/profil10.jpg", "MOREL", "Gilles", "Programmeur",createID("Gilles","MOREL"), "Salarié"),
                array("image/profil6.jpg", "RIQUIER", "Julien", "Technicien", createID("Julien","RIQUIER"), "Salarié"),
                array("image/profil21.jpg", "CADIEUX", "Lea", "Chef de projet", createID("Lea","CADIEUX"), "Direction"),
                array("image/profil7.jpg", "SEVIER", "Valentin", "Architecte logiciel",createID("Valentin","SEVIER"), "Direction"),
                array("image/profil22.jpg", "MERCIER", "Suzette", "Programmeur",createID("Suzette","MERCIER"), "Manager"),
                array("image/profil23.jpg", "COURTLAND", "Elene", "Technicien", createID("Elene","COURTLAND"), "Salarié"),
                array("image/profil24.jpg", "TARDIF", "Céline", "Développeur web", createID("Céline","TARDIF"), "Administrateur"),
                array("image/profil25.jpg", "HACHE", "Carole", "Architecte logiciel",createID("Carole","HACHE"), "Salarié"),
                array("image/profil26.jpg", "GUAY", "Madeleine", "Architecte cloud",createID("Madeleine","GUAY"), "Salarié"),
                array("image/profil27.jpg", "METHOT", "Elodie", "Technicien", createID("Elodie","METHOT"), "Salarié"),
                array("image/profil8.jpg", "PAIEN", "Raymond", "Ingénieur cloud computing", createID("Raymond","PAIEN"), "Administrateur"),
                array("image/profil9.jpg", "RANCOURT", "Nicolas", "Architecte cloud",createID("Nicolas","RANCOURT"), "Salarié"),
                array("image/profil28.jpg", "DESRUISSEAUX", "Astrid", "Hot liner",createID("Astrid","DESRUISSEAUX"), "Salarié"),
                array("image/profil11.jpg", "AUGER", "Olivier", "Technicien", createID("Olivier","AUGER"), "Salarié"),
                array("image/profil12.jpg", "PICARD", "Emmanuel", "Responsable de la sécurité des systèmes d'information", createID("Emmanuelle","PICARD"), "Administrateur"),
                array("image/profil29.jpg", "AUPRY", "Maurelle", "Hot liner",createID("Maurelle","AUPRY"), "Salarié"),
                array("image/profil13.jpg", "DROUIN", "Matthieu", "Directeur technique",createID("Matthieu","DROUIN"), "Direction"),
                array("image/profil14.jpg", "BERARD", "Bernard", "Responsable informatique", createID("Charline","BERARD"), "Manager"),
                array("image/profil30.jpg", "GAUDREAU", "Claire", "Comptable", createID("Claire","GAUDREAU"), "Salarié"),
                array("image/profil15.jpg", "ARTOIS", "Claude", "Comptable",createID("Claude","ARTOIS"), "Salarié"),
            );

            // Affichage du tableau
            echo "<table class='table table-striped table-hover table-bordered'>";
            echo "<thead><tr><th>Photo de profil</th><th>Nom</th><th>Prénom</th><th>Poste</th><th>Identifiant</th><th>Groupe</th></tr></thead>";
            $json=json_encode($annuaire);
            $file_path='annuaire.json';
            $_SESSION['Identifiant']=$annuaire;
            file_put_contents($file_path, $annuaire_json);

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