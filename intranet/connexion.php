<?php session_start(); // Création de la session ?>

<!doctype html>
<html lang="fr">
<body>
<?php
$file_path = 'annuaire.json';
$json_data = file_get_contents($file_path);
$data = json_decode($json_data, true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $utilisateur_saisi = $_POST['utilisateur'];
    $motdepasse_saisi = $_POST['motdepasse'];

    // Vérifier l'authentification de l'utilisateur
    if (array_key_exists($utilisateur_saisi, $data)){
        $identifiant = $data[$utilisateur_saisi]['identifiant'];
        echo $utilisateur_saisi;
        echo 'Utilisateur trouvé';
    } else {
        echo 'Utilisateur introuvable';
    }
    // Vérifier le mot de passe
    if ($motdepasse_saisi == 'bonjour'){
        $_SESSION['prenom'] = $_POST['utilisateur'];
        echo 'Authentification réussie';
        header("Location: Accueil.php");
        exit();
        echo ('Utilisateur: '.$_SESSION['prenom'].'<hr>');
    } else {
        // Authentification échouée
        echo 'Mot de passe incorrect';
    }


}

// Vérifier si un utilisateur est connecté
if (isset($_SESSION['prenom'])){
    echo 'Utilisateur connecté: ' . $_SESSION['prenom'];
} else {
    echo 'Utilisateur non connecté';
}
?>
</body>
</html>


