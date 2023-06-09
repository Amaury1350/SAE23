<?php
session_start(); // Création de la session

$file_path = 'annuaire.json';
$json_data = file_get_contents($file_path);
$data = json_decode($json_data, true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $utilisateur_saisi = $_POST['utilisateur'];
    $motdepasse_saisi = $_POST['motdepasse'];

    // Vérifier l'authentification de l'utilisateur
    foreach ($data as $colonne) {
        if ($utilisateur_saisi == $colonne[4]){
                if ($motdepasse_saisi == 'bonjour') {
                $_SESSION['prenom'] = $_POST['utilisateur'];
                header("Location: Accueil.php");
                exit();
                } else {
               
                echo 'Mot de passe incorrect';
                }
        } else{
            echo 'Utilisateur inconnu';
        //header("Location: ../page_sign_in.php");
        //exit();
        }
    }
    $users=$_SESSION['groupe'];
    var_dump($users);
    
    // Si la boucle foreach termine sans authentification réussie
    
}

// Vérifier si un utilisateur est connecté
//if (isset($_SESSION['prenom'])) {
//    echo 'Utilisateur connecté: ' . $_SESSION['prenom'];
//} else {
//    echo 'Utilisateur non connecté';
//}
?>
