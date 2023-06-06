<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
  $fileArray = $_FILES['files'];

  // Process and save the files
  foreach ($fileArray['tmp_name'] as $key => $tmp_name) {
    $file_name = $fileArray['name'][$key];
    $file_tmp = $fileArray['tmp_name'][$key];
    move_uploaded_file($file_tmp, '../Fichiers/' . $file_name);
  }

  echo 'Les fichiers ont été téléchargés avec succès.';
}
?>
