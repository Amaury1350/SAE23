<!--Voici la page partenaires-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "fonctions.php";
  bootstrap("Site SAE23");
  
  
  
  ?>
</head>
<body>
  <div class="principal">
    <?php nav("image/logo3.png",5); ?>
    <div class="container mt-4">
      <?php 
        // récupération du fichier contenant les partenaires
        $file_path = 'intranet/partenaires.json';
        $partenaires_json = file_get_contents($file_path);
        // Décodage du JSON
        $partenaires = json_decode($partenaires_json, true);
        //return var_dump($partenaires);
        afficherPartenaires($partenaires);
      ?>
    </div>
  </div>


  <br><br>
  <div>
    <?php footer(); ?>   
  </div>       
</body>
</html>