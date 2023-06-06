<!DOCTYPE html>
<html>
<head>
    <?php include "../fonctions.php";
    bootstrap("Site SAE23");
    ?>
  <title>Liste des fichiers</title>
</head>
<body>
  <h2>Liste des fichiers</h2>
  <?php
  $uploadsDir = '../Fichiers/';
  $files = scandir($uploadsDir);
  foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
      echo '<a href="' . $uploadsDir . $file . '" download>' . $file . '</a><br>';
    }
  }
  ?>
  <div class="d-flex justify-content-center align-items-center">
    <a href="Gestion_Fichiers.php" class="btn btn-warning">Cliquez ici pour revenir à la page prédédente</a>
  </div>
</body>
</html>
