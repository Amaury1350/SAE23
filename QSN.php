<!--Voici la page qui sommes-nous-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "fonctions.php";bootstrap("Site SAE23");?>
</head>
<body>
  <style>.custom-img {
  object-fit: cover;
  background-size: cover;
  background-position: center;
  height: 100%;
  width: 100%;
}
  </style>
  <div class="principal">
    <?php nav("image/logo3.png",3); ?>
    <div class="container mt-4">
      <h2><strong>Qui sommes-nous</strong></h2>
      <p class="lead text-justify"><br>
        Notre sommes spécialisée dans la fourniture de solutions technologiques
        innovantes pour les entreprises. Nous offrons une large gamme de services informatiques allant de
        la conception et du développement de logiciels à l'infrastructure réseau et à la sécurité des données.
      </p>
      <p class="lead text-justify">
        Notre équipe d'experts passionnés par la technologie travaille en étroite collaboration avec nos
        clients pour comprendre leurs besoins spécifiques et leur fournir des solutions sur mesure qui
        répondent à leurs objectifs commerciaux.
      </p><br>
      <div class="d-flex align-items-center justify-content-center">
        <img class="img-fluid ow g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" width="55%" height="55%" src="image/bureau.jpg">
      </div>
      <br>
      <p class="lead text-justify">
        Nous croyons en l'excellence et en la qualité de notre travail. Nous nous efforçons de rester à la
        pointe des dernières avancées technologiques pour offrir à nos clients des solutions efficaces et
        innovantes. Notre objectif est de fournir un service de première classe et de développer des
        relations à long terme avec nos clients basées sur la confiance et la satisfaction.
      </p>
      <p  class="lead text-justify">Nous sommes fiers de notre équipe d'ingénieurs et de développeurs talentueux, qui allient expertise technique et créativité pour proposer des solutions de pointe. Nous travaillons en étroite collaboration avec nos clients, en écoutant leurs besoins, en comprenant leurs défis et en leur offrant des conseils avisés pour tirer le meilleur parti de la technologie.</p><br>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Nos liens avec nos partenaires</h3><br>
          <p class="lead card-text mb-auto">Chez nous, nous croyons en la puissance de la collaboration et des partenariats pour offrir des solutions technologiques de premier ordre. Nous sommes fiers de travailler main dans la main avec un réseau de partenaires stratégiques, partageant notre vision d'excellence et d'innovation.</p>
          <a href="Partenaires.php" class="stretched-link">En savoir plus</a>
        </div>
        
      </div>
    </div>
  </div>
</div>

<br><br>
<div>
  <?php footer(); ?> 

</div>       
</body>
</html>


