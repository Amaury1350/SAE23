<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "../fonctions.php";
  bootstrap("Site SAE23");
  ?>
</head>
<body>
    <?php navbar(3) ;
        // récupération du fichier contenant les partenaires
        $file_path = 'partenaires.json';
        $partenaires_json = file_get_contents($file_path);
        // Décodage du JSON
        $partenaires = json_decode($partenaires_json, true);

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        }
        else {
        echo "Error";
        }
    ?>
    <div class="container mt-4">
    <div class="pt-5 my-2 text-center">
        <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Modification d'un partenaire</h1>
        <div class="col-lg-6 mx-auto">
            <h4 class="lead mb-4">Veuillez entrer les nouvelles informations du partenaire</h4>
            <br>
        </div>
    </div>

    <form method="post" action="Gestion_partenaires.php" >
        <input type="hidden" name="id" id="id" value="<?php if (isset($_POST['id'])) { echo $id; }?> ">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du partenaire</label>
            <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $partenaires[$id]['nom']; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"><?php echo $partenaires[$id]['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Chemin du logo</label>
            <input type="text" name="logo" class="form-control" id="logo" value="<?php echo $partenaires[$id]['logo']; ?>">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>




</div>
</body>
