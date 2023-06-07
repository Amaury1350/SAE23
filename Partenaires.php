<!--Voici la page partenaires-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "fonctions.php";include "intranet/Gestion_partenaires.php";
  bootstrap("Site SAE23");
  
  
  
  ?>
</head>
<body>
  <div class="principal">
    <?php nav("image/logo3.png",5); ?>
    <div class="container mt-4">
      <?php 
    $partenaires_json = $_COOKIE['partenaires'];
    $partenaires = json_decode($partenaires_json, true);
  
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