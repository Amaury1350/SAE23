<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "../fonctions.php";
  bootstrap("Site SAE23");
  ?>
</head>
<body>

<?php navbar(3) ;

// Définition des partenaires
$partenaires = array(
  array(
      'logo' => 'image/Mega-logo.png',
      'nom' => 'Mega',
      'description' => 'Mega est une marque dynamique et innovante dans le domaine des technologies de l\'information et de la communication. En tant que partenaire stratégique, notre entreprise a établi une relation de confiance avec Mega pour offrir à nos clients des solutions technologiques de premier ordre.',
      'infos_privees' => 'Partenaire depuis le 02/09/2012 | Fournisseur de serveur pour le Cloud',
      'id' => '0'
  ),
  array(
      'logo' => 'image/HP-Logo.png',
      'nom' => 'HP',
      'description' => 'HP est une marque emblématique dans le domaine de la technologie, reconnue mondialement pour son expertise et ses innovations constantes. En tant que partenaire privilégié, notre entreprise a établi une solide collaboration avec HP afin de fournir à nos clients les meilleurs solutions.',
      'infos_privees' => 'Partenaire depuis le 30/02/1999 | Fournisseur de PC et de laptop',
      'id' => '1'
  ),
  array(
    'logo' => 'image/Cisco-logo.png',
    'nom' => 'Cisco',
    'description' => 'Cisco est une marque leader dans le domaine des technologies de l\'information et de la communication, renommée pour ses solutions innovantes et sa capacité à transformer les entreprises du monde entier. En tant que partenaire de confiance, notre entreprise a établi une solide collaboration avec Cisco pour offrir à nos clients des solutions technologiques de pointe',
    'infos_privees' => 'Partenaire depuis le 19/07/2002 | Fournisseur de routeur et switch',
    'id' => '2'
),

  
);


$file_path = 'partenaires.json';
//récupération du json
$partenaires_json = file_get_contents($file_path);





if ($partenaires==json_decode($partenaires_json, true)){
    $modif=false;
    // Encodage de la variable des partenaires en JSON
    $partenaires_json = json_encode($partenaires);
    // Écriture du contenu dans le fichier JSON
    file_put_contents($file_path, $partenaires_json);
}
else {
    $modif==true;
    $partenaires = json_decode($partenaires_json, true);
    
}


// Fonction de test
/*
function partenaires($partenaire1) {

    foreach ($partenaire1 as $partenaire) {
      echo '<img src="' . $partenaire['logo'] . '" width="8%" alt="' . $partenaire['nom'] . '">';
      echo '<h3>' . $partenaire1['nom'] . '</h3>';
      echo '<p>' . $partenaire['description'] . '</p>';
    }
    $userGroup = 'Administrateur';
        if ($userGroup == 'Administrateur') {
            echo '<td>' . $partenaire['infos_privees'] . '</td>';
        } else {
            echo '<td>Non autorisé</td>';
        }

    foreach ($partenaires as $id => $partenaire) {
        echo '<a href="modif_part.php" id="' . $id . '">' . $partenaire['nom'] . '</a>';
        echo '<br>';
    }
}
*/
?>

<div class="container mt-4">
        <div class="pt-5 my-2 text-center">
            <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Liste de nos partenaires</h1>
            <div class="col-lg-6 mx-auto">
                <h4 class="lead mb-4">Voici la liste des partenaires</h4>
                <br>
            </div>
        </div>
    <?php   
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $modif=true;
        // Recherche de l'index du partenaire correspondant à l'ID
        $index = array_search($id, array_column($partenaires, 'id'));
    
        // Vérification si l'index a été trouvé
        if ($index !== false) {
            
            $partenaires[$index]['nom'] = $_POST['nom'];
            $partenaires[$index]['description'] = $_POST['description'];
            $partenaires[$index]['logo'] = $_POST['logo'];
            
    
            // mise à jour du fichier JSON
            $partenaires_json = json_encode($partenaires);
            
            if (file_put_contents($file_path, $partenaires_json) !== false) {
                echo "<p class='text-success'>Mis à jour avec succès</p>";
            } else {
                echo "<p>Erreur lors de la mise à jour du fichier partenaires.json.</p>";
            }
            
        } else {
            echo "Erreur : partenaire introuvable";
        }
    }
    //affichage du tableau des partenaires
    echo '<div>'.table_info_part($partenaires).'</div>';
    var_dump($modif);
    ?>
</div>

</body>
</html>