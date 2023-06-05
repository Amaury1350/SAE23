<!--Voici la page activité-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "fonctions.php";bootstrap("Site SAE23");?>
</head>
<body>
  <style>
        .feature-icon {
          width: 4rem;
          height: 4rem;
          border-radius: .75rem;
        }

      .icon-square {
        width: 3rem;
        height: 3rem;
        border-radius: .75rem;
      }

      .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
      }

      .feature-icon-small {
        width: 3rem;
        height: 3rem;
      }
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
<div class="principal">
  <?php nav("image/logo3.png",2); ?>
  <main>
    <div class="pt-5 my-5 text-center border-bottom">
      <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis">Nos Services</h1>
      <div class="col-lg-6 mx-auto">
        <h4 class="lead mb-4">Cloud Info est une entreprise spécialisée dans les solutions technologiques avancées. Nous proposons une large gamme de services pour répondre à vos besoins spécifiques et vous aider à transformer votre entreprise.<br>Voici nos activités clés :</h4>
      <br>
      </div>
    <div class="col-lg-11 ms-auto mx-auto">
      <div class="row g-4 py-5 row-cols-4 row-cols-lg-2">
        <div class="feature col">
          <div class="ms-4 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img class="bi" width="80%" src="image/icon3.png" >
          </div>
          <h3 class="ms-4 fs-2">Développement de logiciels personnalisés</h3>
          <p class="lead ms-4 me-4">Nous concevons et développons des logiciels sur mesure, adaptés à vos besoins uniques. Notre équipe d'experts en développement de logiciels utilise les dernières technologies pour créer des applications performantes, conviviales et évolutives.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img class="bi" width="80%" src="image/icon1.png" >
          </div>
          <h3 class="ms-4 fs-2">Intégration de systèmes</h3>
          <p class="lead ms-4">Nous vous aidons à intégrer différents systèmes au sein de votre infrastructure informatique, garantissant une communication fluide et une gestion efficace des données. Notre approche centrée sur l'architecture et notre expertise technique nous permettent de créer des environnements intégrés et optimisés.</p>
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
            <img class="bi" width="80%" src="image/icon2.png" >
          </div>
          <h3 class="ms-4 fs-2">Solutions de sécurité informatique</h3>
          <p class="lead ms-4 me-4">La protection de vos données et la sécurité de votre infrastructure sont des priorités absolues. Nous proposons des solutions complètes de sécurité informatique, y compris la détection des menaces, la prévention des intrusions, la gestion des identités et des accès, ainsi que des audits de sécurité.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img class="bi" width="80%" src="image/icon4.png" >
          </div>
          <h3 class="ms-4 fs-2">Services de Cloud Computing</h3>
          <p class="lead ms-4">Nous offrons des services de Cloud Computing qui vous permettent de tirer parti de la puissance et de la flexibilité du cloud. Que vous souhaitiez migrer vers le cloud, mettre en place une infrastructure cloud privée ou utiliser des services cloud publics, nous sommes là pour vous accompagner à chaque étape.</p>
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
            <img class="bi" width="80%" src="image/icon5.png" >
          </div>
          <h3 class="ms-4 fs-2">Conseil en technologie</h3>
          <p class="lead ms-4 me-4">Nos experts en technologie sont là pour vous guider dans votre stratégie informatique. Nous vous aidons à identifier les opportunités technologiques, à élaborer des plans d'action et à mettre en œuvre des solutions efficaces pour améliorer vos processus métier et stimuler votre croissance.</p>
        </div>
        <div class="feature col">
          <div class="ms-3 feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img class="bi" width="80%" src="image/icon6.png" >
          </div>
          <h3 class="ms-4 fs-2">Support technique et maintenance</h3>
          <p class="lead ms-4">Notre équipe de support technique est disponible pour répondre à vos questions, résoudre les problèmes techniques et assurer la maintenance continue de vos systèmes. Nous vous offrons une assistance professionnelle pour garantir le bon fonctionnement de vos applications et de votre infrastructure.</p>
        <br>
        <br>
        </div>
    </div>
  </div>

  </main>
</div>
  
  <div>
    <?php footer(); ?>   
  </div>       
</body>
</html>



