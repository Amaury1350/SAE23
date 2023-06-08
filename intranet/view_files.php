<!DOCTYPE html>
<html>
<head>
    <?php include "../fonctions.php";
    bootstrap("Site SAE23");
    ?>
  <title>Liste des fichiers</title>
</head>
<body>
<?php navbar(2) ?>
<div class="container mt-4">
        <div class="pt-5 my-2 text-center">
            <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Gestionnaire de fichiers</h1>
            <div class="col-lg-6 mx-auto">
                <h4 class="lead mb-4">Voici la liste des fichiers</h4>
                <br>
            </div>
        </div>  

  <?php
  $uploadsDir = '../Fichiers/';
  $files = scandir($uploadsDir);
  foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
      echo '<div class="d-flex justify-content-between align-items-center">
                <a href="' . $uploadsDir . $file . '" download>' . $file . '</a>
                <form action="supprimer_fichiers.php" method="post" style="display: inline;">
                    <input type="hidden" name="filename" value="' . $file . '">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div><br>';
    }
  }



  // a voir
  ?>
  <script>
        function supprimerFichier() {
            var filename = document.getElementById("filename").value;
            var uploadsDir = '../Fichiers/';

            // Créer une requête XMLHttpRequest
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'supprimer_fichier.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            // Callback de la requête
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Afficher la réponse
                    alert(xhr.responseText);

                    // Actualiser la page
                    window.location.reload();
                }
            };

            // Envoyer la requête avec les données du formulaire
            xhr.send('filename=' + filename);
        }
    </script>
  <div class="d-flex justify-content-center align-items-center">
    <a href="Gestion_Fichiers.php" class="btn btn-warning">Cliquez ici pour revenir à la page précédente</a>
  </div>
</div>
</body>
</html>