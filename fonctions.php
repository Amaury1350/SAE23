<!--Page de fonctions php-->

<?php 
###Fonctions###
    function bootstrap($t){
      //importation de bootstrap et crétion du titre de la page
        echo '<head>
        <title>'.$t.'</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        </head>';
    }

    function read_data($fichier) {
        //////////////////////////////////////////////////////////
        // chemin d'accès
        $file = 'data/'.$fichier.'.json';
        // mettre le contenu du fichier dans une variable
        $data = file_get_contents($file);
        //var_dump($data);
        // décoder le flux JSON
        $obj = json_decode($data);
        // accéder au contenu
        return $obj;
        //////////////////////////////////////////////////////////
    }

    function h($titre){
        //fonction pour créer un en-tête
        echo '
        <div class="jumbotron jumbotron-fluid mb-0 py-4">
        
        <h2 class="col-sm-8" >'.$titre.'</h2></div>
        ';

    }


    function nav($t2,$p1) {
      //reset des variables
      $x="";$y="";$z="";$w="";$v="";
      $xx=' color:#5E503F" class="nav-link" href="index.php"';$yy=' color:#5E503F" class="nav-link" href="Activité.php"';$ww=' color:#5E503F" class="nav-link" href="Histoire.php"';$zz=' color:#5E503F" class="nav-link" href="QSN.php"';$vv=' color:#5E503F " class="nav-link" href="Partenaires.php"';
      //code du bouton
      $loginButton = '<a style="color: #f7f7f7; background-color:#5E503F;" class="ms-auto me-4 btn " href="#">Se connecter</a>';
      //algorithme pour definir la page active

      if ($p1==1){
          $x=" active";
          $xx='color:#ffffff" class="nav-link" href="#"';
      }
      elseif($p1==2){
          $y=" active";
          $yy='color:#ffffff" class="nav-link" href="#"';
      }
      elseif($p1==3){
          $z=" active";
          $zz='color:#ffffff" class="nav-link" href="#"';
      }
      elseif($p1==4){
          $w=" active";
          $ww='color:#ffffff" class="nav-link" href="#"';
      }
      elseif($p1==5){
        $v=" active";
        $vv='color:#ffffff" class="nav-link" href="#"';
    }
      else{
          $x.$y.$z.$w.$v="";
          $xx.$yy.$ww.$zz.$vv=" color:#b8b8b8";
      }
      //code html navbar
      echo '<div class="navbar-nav shadow">
      <nav style="background-color:#A9927D;" class="navbar navbar-expand-sm ">
        <a class="navbar-brand"><img style="width:40px;" src="'.$t2.'"></a>
        <ul class="navbar-nav">
          <li class="nav-item '.$x.'">
            <a style="'.$xx.'><strong>Accueil</strong></a>
          </li>
          <li class="nav-item '.$y.'">
            <a style="'.$yy.'><strong>Activités</strong></a>
          </li>
          <li class="nav-item '.$z.'">
            <a style="'.$zz.'><strong>Qui sommes nous</strong></a>
          </li>
          <li class="nav-item '.$w.'">
            <a style="'.$ww.'><strong>Histoire</strong></a>
          </li>
          <li class="nav-item '.$v.'">
            <a style="'.$vv.'><strong>Partenaires</strong></a>
          </li>
        </ul>
        
        '.$loginButton.'
      </nav>
  
    </div>';
  }

    function footer() {
      //fonction pour le footer
      echo '
      <style>
        html, body {
            background-color: #f7f7f7;
            height: 100%;
        }
        .principal {
            min-height: 100%;
            margin-bottom: -50px; /* Hauteur du footer */
        }
        .footer {
            height: 50px; /* Hauteur du footer */
            padding: 0px;
        }
    </style>
      <footer class="footer mt-auto py-3" style="background-color:#dddddd">
      <div class="jumbotron text-muted mt-4" style="background-color:#dddddd">
      <div class="ms-4 row">
          <div class="ms-4 me-4 col-md-4">
              <h4>À propos</h4>
              <p>Lorem ipsum dolor sit amet, entum, sed mattis neque gravida.</p>
          </div>
          <div class="ps-4 me-4 col-sm-4">
              <h4>Contact</h4>
              <p>Adresse : 40 Rue de la Croix Desilles, 35400 Saint-Malo<br>
              Téléphone : 06 85 78 91 34<br>
              Email : CloudInfo@gmail.com</p>
          </div>
          <div class="ps-4 col-md-3">
              <h4>Liens utiles</h4>
              <ul>
                  <li><a href="#">À propos</a></li>
                  <li><a href="Activité.php">Services</a></li>
                  <li><a href="mailto:CloudInfo@gmail.com">Contact</a></li>
              </ul>
          </div>
      </div>
      <div class="text-center">
              <p><br>&copy; '.date('Y').'CloudInfo.com. Tous droits réservés.</p>
          </div><br>
  </div>
  
  </footer>';
      /*echo '<footer class="footer mt-auto py-3 bg-body-tertiary">
          <div class="jumbotron text-muted">
            <p class="text-right">
              Amaury Cournac 
              <a href="mailto:amaury.cournac@gmail.com" >amaury.cournac@gmail.com</a>
              TP jeudi 30 mars 2023
            </p>
            <p class="text-muted text-right">
            '.$_SERVER["REMOTE_ADDR"].' '.date('Y-m-d H:i:s').'

          </div>
        </footer>';*/
    }
?>
