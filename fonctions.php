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
        <a class="navbar-brand"><img class="ms-2" style="width:40px;" src="'.$t2.'"></a>
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


<?php
///Nav bar pour l'intranet

function navbar($np1){
  $na="";$nb="";$nc="";$nd="";$ne="";$nf="";
  $naa=" color:#b8b8b8";$nbb=" color:#b8b8b8";$ncc=" color:#b8b8b8";$ndd=" color:#b8b8b8";$nee=" color:#b8b8b8";$nff=" color:#b8b8b8";

///condition pour definir la page actives
if ($np1==1){
$na=" active";
$naa=" style='background-color:#a9927d;'";
}
elseif($np1==2){
$nb=" active";
$nbb=" style='background-color:#a9927d;'";
}
elseif($np1==3){
$nc=" active";
$ncc=" style='background-color:#a9927d;'";
}
elseif($np1==4){
$nd=" active";
$ndd=" style='background-color:#a9927d;'";
}
elseif($np1==5){
  $ne=" active";
  $nee=" style='background-color:#a9927d;'";
  }
elseif($np1==6){
  $nf=" active";
  $nff=" style='background-color:#a9927d;'";
  }
else{
$na.$nb.$nc.$nd.$ne.$nf="";
$naa.$nbb.$ncc.$ndd.$nee.$nff=" text-white";
}

///code html de la navbar
    echo '<div class="d-flex flex-column flex-shrink-0 p-3" style="background-color : #22333b; heigth: 100px ; width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">SAE23</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="Accueil.php" class="nav-link '.$na.'" '.$naa.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Accueil
        </a>
      </li>
      <li>
        <a href="Gestion_Fichiers.php" class="nav-link '.$nb.'"'.$nbb.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Gestion fichiers
        </a>
      </li>
      <li>
        <a href="Gestion_partenaires.php" class="nav-link '.$nc.'"'.$ncc.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Gestion partenaires
        </a>
      </li>
      <li>
        <a href="Gestion_user.php" class="nav-link '.$nd.'"'.$ndd.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Gestion utilisateur
        </a>
      </li>
      <li>
        <a href="Wiki.php" class="nav-link '.$ne.'"'.$nee.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlinkh:ref="#people-circle"></use></svg>
          Wiki
        </a>
      </li>
      <li>
        <a href="annuaire.php" class="nav-link '.$nf.'"'.$nff.' style="color:#a9927d">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlinkh:ref="#people-circle"></use></svg>
          Annuaire
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
</div>
';
}