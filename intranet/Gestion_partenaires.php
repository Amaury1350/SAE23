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
      'infos_privees' => 'Partenaire depuis le 02/09/2012 | Fournisseur de serveur pour le Cloud'
  ),
  array(
      'logo' => 'image/HP-Logo.png',
      'nom' => 'HP',
      'description' => 'HP est une marque emblématique dans le domaine de la technologie, reconnue mondialement pour son expertise et ses innovations constantes. En tant que partenaire privilégié, notre entreprise a établi une solide collaboration avec HP afin de fournir à nos clients les meilleurs solutions.',
      'infos_privees' => 'Partenaire depuis le 30/02/1999 | Fournisseur de PC et de laptop'
  ),
  array(
    'logo' => 'image/Cisco-logo.png',
    'nom' => 'Cisco',
    'description' => 'Cisco est une marque leader dans le domaine des technologies de l\'information et de la communication, renommée pour ses solutions innovantes et sa capacité à transformer les entreprises du monde entier. En tant que partenaire de confiance, notre entreprise a établi une solide collaboration avec Cisco pour offrir à nos clients des solutions technologiques de pointe',
    'infos_privees' => 'Partenaire depuis le 19/07/2002 | Fournisseur de routeur et switch'
),

  
);

// Encodage de la variable des partenaires en JSON
$partenaires_json = json_encode($partenaires);
// Écriture du contenu dans le fichier JSON
$file_path = 'partenaires.json';
file_put_contents($file_path, $partenaires_json);




// Fonction de test
function partenaires($partenaire1) {

    foreach ($partenaire1 as $partenaire) {
      echo '<img src="' . $partenaire['logo'] . '" width="8%" alt="' . $partenaire['nom'] . '">';
      echo '<h3>' . $partenaire1['nom'] . '</h3>';
      echo '<p>' . $partenaire['description'] . '</p>';
    }
}


?>

<div class="container">
    <?php   
    echo '<div>'.table_info_part($partenaires).'</div>';

    ?>
</div>

</body>
</html>