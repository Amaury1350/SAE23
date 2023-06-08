<?php session_start(); // Création de la session ?>

<!doctype html>
<html lang="fr">
<body>
<?php
$json=json_decode($annuaire);
$annuaire=$_SESSION['id'];
$MotDePasse="bonjour";
$MotDePasse_saisie=$_POST['motdepasse'];
if ($MotDePasse_saisie ==$MotDePasse){
    echo 'Authentification réussie'
    
} else {
    echo 'mot de passe incorrect'
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);
    $_SESSION['prenom'] = $_POST['utilisateur'];


    // var_dump($_SESSION);
    echo ('Utilisateur: '.$_SESSION['prenom'].'<hr>');

    // echo $_POST['utilisateur'];

    // echo '<br>';
    // echo $_POST['motdepasse'];
    
    echo("Accèder à l'accueil : ");
     echo('<a href="intranet/Accueil.php">Accueil</a>');
      }

?>
</body>

</html>