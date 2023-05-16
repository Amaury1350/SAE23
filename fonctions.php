//Page de fonctions php

<?php 
###Fonctions###
    function bootstrap($t){
        echo '<head>
        <title>'.$t.'</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
        </script>
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

        echo '<header class="header">
        <div class="jumbotron jumbotron-fluid">
        
        <h2 class="col-sm-8" >'.$titre.'</h2>
        </div>
        </header>';

    }


    function nav($t2,$p1) {
        $x="";$y="";$z="";$w="";
        $xx=" color:#b8b8b8";$yy=" color:#b8b8b8";$ww=" color:#b8b8b8";$zz=" color:#b8b8b8";
        //algorithme pour definir la page active

        if ($p1==1){
            $x=" active";
            $xx=" text-white nav-link";
        }
        elseif($p1==2){
            $y=" active";
            $yy=" text-white nav-link";
        }
        elseif($p1==3){
            $z=" active";
            $zz=" text-white nav-link";
        }
        elseif($p1==4){
            $w=" active";
            $ww=" text-white nav-link";
        }
        else{
            $x.$y.$z.$w="";
            $xx.$yy.$ww.$zz=" color:#b8b8b8";
        }
        //code html navbar
        echo '<div class="navbar-nav">
        <nav style="background-color:#696969;"class="navbar navbar-expand-sm ">
          <a class="text-white navbar-brand"><strong>'.$t2.'</strong></a>
          <ul class="navbar-nav">
            <li class="nav-item '.$x.'">
              <a style="'.$xx.'" class="nav-link" href="index.php"><strong>Accueil</strong></a>
            </li>
            <li class="nav-item '.$y.'">
              <a style="'.$yy.'" class="nav-link" href="page02.php"><strong>Formulaire</strong></a>
            </li>
            <li class="nav-item '.$z.'">
              <a style="'.$zz.'" class="nav-link" href="page03.php"><strong>Informations</strong></a>
            </li>
            <li class="nav-item '.$w.'">
              <a style="'.$ww.'" class="nav-link" href="page04.php"><strong>Fichiers</strong></a>
            </li>
          </ul>
        </nav>
    
      </div>';
    }

    function footer() {
        echo '<footer class="footer">
          <div class="jumbotron text-muted">
            <p class="text-right">
              Amaury Cournac 
              <a href="mailto:amaury.cournac@gmail.com" >amaury.cournac@gmail.com</a>
              TP jeudi 30 mars 2023
            </p>
            <p class="text-muted text-right">
            '.$_SERVER["REMOTE_ADDR"].' '.date('Y-m-d H:i:s').'

          </div>
        </footer>';
    }

    //fonction qui permet de voir les livres disponibles
    function showbooks($data2) {
      // Ouvre la balise de table Bootstrap
      $table = '<table class="table table-striped table-bordered">
      <thead><tr>';
      //création du tableau
      foreach ($data2[0] as $key => $value) {
        $table .= '<th>' . $key . '</th>';
      }
      $table .= '</tr></thead><tbody>';
      
      foreach ($data2 as $row) {
        $table .= '<tr>';
        foreach ($row as $key => $value) {
          $table .= '<td>' . $value . '</td>';
        }
        $table .= '</tr>';
      }
      $table .= '</tbody></table>';
      
      // Renvoie la table HTML générée
      return $table;
    }
?>
