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
      <div class="pt-5 my-5 text-center">
        <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Nos Partenaires</h1>
          <div class="col-lg-6 mx-auto">
            <h4 class="lead mb-4">En tant qu'entreprise, nous avons établi des partenariats solides avec des acteurs majeurs de l'industrie technologique, nous permettant ainsi de proposer à nos clients des solutions de pointe et de rester à la pointe de l'innovation.</h4>
            <br>
          </div>
      </div>
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