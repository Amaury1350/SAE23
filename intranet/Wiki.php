<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "../fonctions.php";
  bootstrap("Site SAE23");
  ?>
</head>
<body>
<?php navbar(5) ?>

<div class="principal">
  <main>
    <div class="pt-5 my-5 text-center border-bottom">
      <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis">Wiki</h1>
      <div class="col-lg-6 mx-auto">
        <h4 class="lead mb-4">Sur cette page vous pouvez voir toutes les fonctionnalités de chaque page de l'intranet.</h4>
      <br>
      </div>
    <div class="col-lg-11 ms-auto mx-auto">
      <div class="row g-4 py-5 row-cols-4 row-cols-lg-2">
        <div class="feature col">
          <div class="ms-4 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Accueil</h3>
          <p class="lead ms-4 me-4">Cette page est la page par défaut lorsque vous vous connecter à l'intranet de notre entreprise.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Gestion de fichiers</h3>
          <p class="lead ms-4">Sur cette page vous pourrez déposer des fichiers ou en récupérer selon votre groupe (Directeur, Salariés, Administrateur, Manager). Si vous vous êtes trompé de fichiers vous pouvez le supprimer.</p>
        <br>
        <br>
        </div>
      </div>
    </div>

  <div class="b-example-divider"></div>
  
  <div class="col-lg-11 ms-auto mx-auto">
      <div class="row g-4 py-5 row-cols-4 row-cols-lg-2">
        <div class="feature col">
          <div class="ms-4 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Gestion des partenaires</h3>
          <p class="lead ms-4 me-4">Sur cette page vous pouvez voir nos partenaires avec leur logo, le nom de l'entreprise, une description ainsi que des informations privées qui sont accessible selon le groupe dans lequel vous êtes.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Gestion des utilisateurs</h3>
          <p class="lead ms-4">Sur cette page, certaines personnes (Administrateurs) qui ont les droits peuvent créer, modifier et supprimer des utilisateurs pour accéder à l'intranet.</p>
          <br>
          <br>
        </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  
  <div class="col-lg-11 ms-auto mx-auto">
      <div class="row g-4 py-5 row-cols-4 row-cols-lg-2">
        <div class="feature col">
          <div class="ms-4 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Wiki</h3>
          <p class="lead ms-4 me-4">La page wiki est la page où l'on se trouve actuellement et elle permet de résumer les fonctionnalités de chaque pages présentent sur l'intranet.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
          </div>
          <h3 class="ms-4 fs-2">Annuaire</h3>
          <p class="lead ms-4">L'annuaire est un tableau contenant les noms et prénoms de tout le personnel de notre entreprise. A partir des noms et prénoms les identifiants sont créés, il y a également le poste que vous occupez dans l'entreprise et le groupe auxquel vous appartenez, ainsi que votre photo de profil.</p>
        <br>
        <br>
        </div>
    </div>
  </div>

  </main>
</div>

</body>
</html>