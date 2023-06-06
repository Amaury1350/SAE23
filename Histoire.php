<!--Voici la page histoire-->

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "fonctions.php";bootstrap("Site SAE23");?>
</head>
<body>
  <div class="principal mt-0">
    <?php nav("image/logo3.png",4); ?>
    <div class="container mt-4">
    
      <h5 style="color:#22333b;" class="mt-2 mb-2 text-center">
        Pour mieux nous connaître nous vous proposons une timeline de l'histoire de l'entreprise depuis ça création jusqu'à aujourd'hui
      </h5><br>
    <div class="timeline2">
    </div>
    </div>
  
<style>
      body{
          background-color: #f7f7f7;
          margin-top:0px;
      }

      .main-timeline {
          position: relative
      }

      .main-timeline:before {
          content: "";
          display: block;
          width: 2px;
          height: 100%;
          background: #a9927d;
          margin: 0 auto;
          position: absolute;
          top: 0;
          left: 0;
          right: 0;        
      }
      .timeline2 {
          display: block;
          width: 1300px;
          height: 2px;
          background: #a9927d;
          margin-top: 0;
          position: absolute;
          
          margin-left: 0px;
          margin-right: -50px; 
          
        
      }
      .main-timeline .timeline {
          margin-bottom: 40px;
          position: relative
      }

      .main-timeline .timeline:after {
          content: "";
          display: block;
          clear: both
      }

      .main-timeline .icon {
          width: 18px;
          height: 18px;
          line-height: 18px;
          margin: auto;
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0
      }

      .main-timeline .icon:before,
      .main-timeline .icon:after {
          content: "";
          width: 100%;
          height: 100%;
          border-radius: 50%;
          position: absolute;
          top: 0;
          left: 0;
          transition: all 0.33s ease-out 0s
      }

      .main-timeline .icon:before {
          background: #fff;
          border: 2px solid #22333b;
          left: -2px
      }

      .main-timeline .icon:after {
          border: 2px solid #a9927d;
          left: 2px
      }

      .main-timeline .timeline:hover .icon:before {
          left: 2px
      }

      .main-timeline .timeline:hover .icon:after {
          left: -2px
      }

      .main-timeline .date-content {
          width: 50%;
          float: left;
          margin-top: 38px;
          position: relative
      }
      .main-timeline .date2-content {
          width: 50%;
          float: right;
          margin-top: 97px;
          position: relative
      }
      .main-timeline .date3-content {
          width: 50%;
          float: left;
          margin-top: 110px;
          position: relative
      }
      .main-timeline .date4-content {
          width: 50%;
          float: right;
          margin-top: 85px;
          position: relative
      }
      .main-timeline .date5-content {
          width: 50%;
          float: left;
          margin-top: 49px;
          position: relative
      }

      .main-timeline .date-content:before {
          content: "";
          width: 39%;
          height: 2px;
          background: #a9927d;
          margin: auto 0;
          position: absolute;
          top: 0;
          right: 10px;
          bottom: 0
      }
      .main-timeline .date2-content:before {
          content: "";
          width: 39%;
          height: 2px;
          background: #a9927d;
          margin: auto 0;
          position: absolute;
          top: 0;
          right: 386px;
          bottom: 0
      }
      .main-timeline .date3-content:before {
          content: "";
          width: 39%;
          height: 2px;
          background: #a9927d;
          margin: auto 0;
          position: absolute;
          top: 0;
          right: 10px;
          bottom: 0
      }
      .main-timeline .date4-content:before {
          content: "";
          width: 39%;
          height: 2px;
          background: #a9927d;
          margin: auto 0;
          position: absolute;
          top: 0;
          right: 386px;
          bottom: 0
      }
      .main-timeline .date5-content:before {
          content: "";
          width: 39%;
          height: 2px;
          background: #a9927d;
          margin: auto 0;
          position: absolute;
          top: 0;
          right: 10px;
          bottom: 0
      }


      .main-timeline .date-outer {
          width: 125px;
          height: 125px;
          font-size: 16px;
          text-align: center;
          margin: auto;
          z-index: 1
      }

      .main-timeline .date-outer:before,
      .main-timeline .date-outer:after {
          content: "";
          width: 125px;
          height: 125px;
          margin: 0 auto;
          border-radius: 50%;
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          transition: all 0.33s ease-out 0s
      }

      .main-timeline .date-outer:before {
          background: #fff;
          border: 3px solid #22333b;
          left: -6px
      }

      .main-timeline .date-outer:after {
          border: 3px solid #a9927d;
          left: 6px
      }

      .main-timeline .timeline:hover .date-outer:before {
          left: 6px
      }

      .main-timeline .timeline:hover .date-outer:after {
          left: -6px
      }

      .main-timeline .date {
          width: 100%;
          margin: auto;
          position: absolute;
          top: 35%;
          left: 0
      }

      .main-timeline .month {
          font-size: 18px;
          font-weight: 700
      }

      .main-timeline .year {
          display: block;
          font-size: 30px;
          font-weight: 700;
          color: #22333b;
          line-height: 36px
      }

      .main-timeline .timeline-content {
          width: 50%;
          padding: 20px 0 20px 50px;
          float: right;
          
      }

      .main-timeline .title {
          font-size: 22px;
          font-weight: 700;
          line-height: 24px;
          margin: 0 0 15px 0;
          color: #22333b;
      }

      .main-timeline .description {
          margin-bottom: 0
      }

      .main-timeline .timeline:nth-child(2n) .date-content {
          float: right
      }

      .main-timeline .timeline:nth-child(2n) .date-content:before {
          left: 10px
      }

      .main-timeline .timeline:nth-child(2n) .timeline-content {
          padding: 20px 50px 20px 0;
          text-align: right
      }

      @media only screen and (max-width: 991px) {
          .main-timeline .date-content {
              margin-top: 35px
          }
          .main-timeline .date-content:before {
              width: 22.5%
          }
          .main-timeline .timeline-content {
              padding: 10px 0 10px 30px
          }
          .main-timeline .title {
              font-size: 17px
          }
          .main-timeline .timeline:nth-child(2n) .timeline-content {
              padding: 10px 30px 10px 0
          }
      }

      @media only screen and (max-width: 767px) {
          .main-timeline:before {
              margin: 0;
              left: 7px
          }
          .main-timeline .timeline {
              margin-bottom: 20px
          }
          .main-timeline .timeline:last-child {
              margin-bottom: 0
          }
          .main-timeline .icon {
              margin: auto 0
          }
          .main-timeline .date-content {
              width: 95%;
              float: right;
              margin-top: 0
          }
          .main-timeline .date-content:before {
              display: none
          }
          .main-timeline .date-outer {
              width: 110px;
              height: 110px
          }
          .main-timeline .date-outer:before,
          .main-timeline .date-outer:after {
              width: 110px;
              height: 110px
          }
          .main-timeline .date {
              top: 30%
          }
          .main-timeline .year {
              font-size: 24px
          }
          .main-timeline .timeline-content,
          .main-timeline .timeline:nth-child(2n) .timeline-content {
              width: 95%;
              text-align: center;
              padding: 10px 0
          }
          .main-timeline .title {
              margin-bottom: 10px
          }
      }
</style>
<div class="container">
<div class="main-timeline">
      
                        <!-- Début section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month"></span>
                                    <span class="year">1988</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">La Fondation</h5>
                                <p class="description">
                                  En 1988, un passionné d'informatique nommé David Thompson. Fort de sa connaissance approfondie du domaine, il décida de fonder sa propre entreprise d'informatique appelée Cloud Info. Avec une petite équipe d'ingénieurs talentueux, il commença à offrir des services de développement de logiciels et de solutions informatiques aux petites entreprises locales.
                                </p>
                            </div>
                        </div>
                        <!-- Fin section-->

                        <!--  Début section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date2-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month"></span>
                                    <span class="year">2000</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title"> L'Expansion sous une Nouvelle Présidence</h5>
                                <p class="description">
                                Après une décennie de croissance soutenue, Cloud Info se trouvait à un tournant majeur en l'an 2000. David Thompson, désireux de prendre sa retraite, décida de passer le flambeau à une nouvelle génération de dirigeants. C'est ainsi que Sarah Miller, une entrepreneure dynamique avec une vision ambitieuse, prit la présidence de l'entreprise. Sous la direction de Sarah, Cloud Info se transforma rapidement en une entreprise de premier plan, proposant une gamme diversifiée de produits et services informatiques. La société se lança dans le développement de logiciels d'entreprise sur mesure, l'intégration de systèmes, ainsi que la fourniture de solutions de sécurité informatique avancées. Les affaires prospérèrent, attirant l'attention des investisseurs et ouvrant de nouvelles opportunités.
                                </p>
                            </div>
                        </div>
                        <!-- Fin sectionFin section-->

                        <!--  Début section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date3-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month"></span>
                                    <span class="year">2008</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Acquisition et Expansion Internationale</h5>
                                <p class="description">
                                Fort de sa position solide sur le marché, Cloud Info décida d'explorer de nouveaux horizons grâce à l'acquisition d'une entreprise concurrente spécialisée dans les services cloud. Cette acquisition stratégique renforça la position de Cloud Info en tant que fournisseur de solutions technologiques de premier plan et lui permit d'élargir sa clientèle.Encouragée par ce succès, l'entreprise décida d'étendre ses activités à l'international. Elle ouvrit des bureaux dans des centres technologiques majeurs à travers le monde, tels que la Silicon Valley, Londres et Singapour. Chaque site géographique devint un hub technologique, rassemblant des experts locaux et attirant des talents du monde entier. Cette expansion internationale permit à Cloud Info de bénéficier de la diversité culturelle et d'exploiter les compétences uniques de chaque région.
                                </p>
                            </div>
                        </div>
                        <!-- Fin section-->

                        <!--  Début section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date4-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month"></span>
                                    <span class="year">2010</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Innovation et Transformation Digitale</h5>
                                <p class="description">
                                Au cours des années 2010, Cloud Info se trouva confrontée à de nouveaux défis et opportunités. La transformation digitale était en marche et l'entreprise devait s'adapter pour rester compétitive. Sous la direction de Sarah Miller, Cloud Info se lança dans des initiatives majeures axées sur l'innovation.L'entreprise investit massivement dans la recherche et le développement, créant un laboratoire d'innovation interne qui favorisait la créativité et l'intrapreneuriat. Cela conduisit à la création de produits révolutionnaires, tels que des solutions d'intelligence artificielle et d'Internet des objets, qui permirent à Cloud Info de répondre aux besoins changeants du marché.
                                </p>
                            </div>
                        </div>
                        <!-- Fin section-->

                        <!--  Début section-->
                        <div class="timeline">
                            <div class="icon"></div>
                            <div class="date5-content">
                                <div class="date-outer">
                                    <span class="date">
                                            <span class="month"></span>
                                    <span class="year">2023</span>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Vers l'Avenir</h5>
                                <p class="description">
                                Aujourd'hui, Cloud Info est devenue une entreprise mondiale incontournable dans le domaine de l'informatique. Sous la présidence de Sarah Miller, l'entreprise a su rester à la pointe de la technologie en anticipant les tendances émergentes et en investissant dans l'innovation continue. Elle est reconnue pour ses produits de qualité, son service client exceptionnel et son engagement envers l'excellence technologique.
                              </p>
                            </div>
                        </div>
                        <!-- Fin section-->

      
    </div>
  </div>
</div>
  <br><br>
  <div>
    <?php footer(); ?>   
  </div>       
</body>
</html>



