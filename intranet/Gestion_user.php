<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php include "../fonctions.php";
    bootstrap("Site SAE23");
    ?>
</head>
<body>
    <?php navbar(4) ?>
    <h1>Liste des Utilisateurs</h1>
    <?php
    // Chemin vers le fichier JSON
    $jsonFile = 'annuaire.json';

    // Vérifier si le formulaire d'ajout a été soumis
    if (isset($_POST['ajouter'])) {
        // Récupérer les données du formulaire
        $image = $_POST['image'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $poste = $_POST['poste'];
        $identifiant = $_POST['identifiant'];
        $departement = $_POST['departement'];

        // Lire le contenu actuel du fichier JSON
        $jsonData = file_get_contents($jsonFile);

        // Décoder le JSON en tableau associatif
        $data = json_decode($jsonData, true);

        // Ajouter le nouvel utilisateur au tableau
        $nouvelUtilisateur = array($image, $nom, $prenom, $poste, $identifiant, $departement);
        $data[] = $nouvelUtilisateur;

        // Encoder le tableau en JSON
        $nouveauJsonData = json_encode($data, JSON_PRETTY_PRINT);

        // Écrire le JSON dans le fichier
        file_put_contents($jsonFile, $nouveauJsonData);

        // Actualiser la page pour afficher le nouvel utilisateur
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Vérifier si un utilisateur doit être supprimé
    if (isset($_GET['supprimer'])) {
        $index = $_GET['supprimer'];

        // Lire le contenu actuel du fichier JSON
        $jsonData = file_get_contents($jsonFile);

        // Décoder le JSON en tableau associatif
        $data = json_decode($jsonData, true);

        // Supprimer l'utilisateur du tableau
        if (isset($data[$index])) {
            unset($data[$index]);

            // Réorganiser les indices du tableau
            $data = array_values($data);

            // Encoder le tableau en JSON
            $nouveauJsonData = json_encode($data, JSON_PRETTY_PRINT);

            // Écrire le JSON dans le fichier
            file_put_contents($jsonFile, $nouveauJsonData);
        }

        // Actualiser la page pour refléter la suppression de l'utilisateur
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    // Lire le contenu du fichier JSON
    $jsonData = file_get_contents($jsonFile);

    // Décoder le JSON en tableau associatif
    $data = json_decode($jsonData, true);

    // Afficher la liste des utilisateurs
    echo '<ul>';

    foreach ($data as $index => $row) {
        echo '<li>';
        echo '<strong>Image:</strong> ' . $row[0] . '<br>';
        echo '<strong>Nom:</strong> ' . $row[1] . '<br>';
        echo '<strong>Prénom:</strong> ' . $row[2] . '<br>';
        echo '<strong>Poste:</strong> ' . $row[3] . '<br>';
        echo '<strong>Identifiant:</strong> ' . $row[4] . '<br>';
        echo '<strong>Département:</strong> ' . $row[5] . '<br>';
        echo '<a href="' . $_SERVER['PHP_SELF'] . '?supprimer=' . $index . '">Supprimer</a>';
        echo '</li>';
    }

    echo '</ul>';
    ?>

    <h2>Ajouter un Utilisateur</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="image">Image :</label>
        <input type="text" name="image" required><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>
        <label for="poste">Poste :</label>
        <input type="text" name="poste" required><br>
        <label for="identifiant">Identifiant :</label>
        <input type="text" name="identifiant" required><br>
        <label for="departement">Département :</label>
        <input type="text" name="departement" required><br>
        <input type="submit" name="ajouter" value="Ajouter">
    </form>
</body>
</html>
