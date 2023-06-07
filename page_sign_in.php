<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Se connecter</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/connexion.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="sidenav">
  <div class="login-main-text">
    <h3 class="display-3">Connexion au site</h3>
    <h4>Entrez votre nom d'utilisateur et votre mot de passe</h4>
  </div>
</div>
<div class="main">
  <div class="col-md-6 col-sm-12">
    <div class="login-form">
      <form action="connexion/connexion.php" method="post">
        <div class="form-group">
          <label>Utilisateur</label>
          <input type="text" class="form-control" name="utilisateur" placeholder="Utilisateur">
        </div>
        <div class="form-group">
          <label>Mot de passe</label>
          <input type="password" class="form-control" name="motdepasse" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-black">Se connecter</button>
      </form>
      
    </div>
  </div>
</div>