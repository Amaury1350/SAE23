<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>

</head>
<body>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = $_POST['filename'];
    $uploadsDir = '../Fichiers/';

    // Vérifier si le fichier existe
    if (file_exists($uploadsDir . $filename)) {
        // Supprimer le fichier
        unlink($uploadsDir . $filename);
        echo "Le fichier $filename a été supprimé avec succès.";
    } else {
        echo "Le fichier $filename n'existe pas.";
    }
    header("refresh:0;url=view_files.php");
}
?>

