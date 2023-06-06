<!--Voici l'accueil-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>

  <?php include "fonctions.php";

  bootstrap("Site SAE23");
  ?>
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
      
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>
</head>
<body>



<div class="principal">
    <?php nav("image/logo3.png",1); ?>
    
      <main>

        <div class="px-4 py-5 my-10 text-center">
          <img class="d-block mx-auto mb-4 " src="image/logo3.png" alt="" width="350px;">
          <h1 class="display-5 fw-bold text-body-emphasis">Bienvenue chez Cloud Info ! </h1><br>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Transformez votre entreprise grâce à l'innovation technologique.<br>Chez Cloud Info, nous sommes passionnés par l'informatique et les opportunités qu'elle offre pour révolutionner votre entreprise. Nous sommes un leader mondial des solutions technologiques, offrant des services de développement de logiciels, d'intégration de systèmes et de sécurité informatique avancée. Avec une expertise solide et une vision axée sur l'avenir, nous sommes là pour vous accompagner dans votre transformation digitale.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <a href="Activité.php" class="btn btn-secondary rounded-pill px-3" type="button">En savoir plus sur nos activités</a>
            </div>
          </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
          <h1 class="display-4 fw-bold text-body-emphasis">Innovation sans compromis</h1>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Nous nous engageons à rester à l'avant-garde de la technologie. Notre équipe d'experts passionnés est constamment à la recherche de nouvelles idées et tendances pour créer des solutions innovantes qui répondent à vos besoins spécifiques.</p>
          </div>
          <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
              <img src="image/cloud.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"  loading="lazy">
            </div>
          </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="image/Partenariat.jpg" class="d-block mx-lg-auto img-fluid rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Partenariat stratégique</h1>
              <p class="lead">Nous croyons en la création de partenariats solides avec nos clients. Nous nous efforçons de comprendre vos objectifs et vos défis, et travaillons main dans la main pour développer des solutions sur mesure qui répondent à vos besoins spécifiques.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="Partenaires.php" class="btn btn-secondary rounded-pill px-3" type="button">En savoir plus sur nos partenaires</a>
              </div>
            </div>
          </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6 text-end">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Expertise globale</h1>
              <p class="lead">Avec notre présence internationale, nous avons la capacité de fournir des solutions technologiques de pointe dans le monde entier. Nos équipes basées dans différents hubs technologiques travaillent ensemble pour apporter des compétences locales et une perspective globale à chaque projet.</p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="image/commerce.jpg" class="d-block mx-lg-auto img-fluid rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
          </div>
        </div>


        
      </main>


</div>
<br><br>
<div>

    <?php footer(); ?>   
</div>       
  </body>
  </html>



