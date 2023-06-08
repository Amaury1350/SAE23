<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <?php include "../fonctions.php";
  bootstrap("Site SAE23");
  ?>
  <title>Gestionnaire de fichiers</title>
  <style>
    .drop-zone {
      border: 2px dashed #ccc;
      width: 300px;
      height: 200px;
      padding: 20px;
      text-align: center;
      font-size: 1.5em;
      margin: 20px auto;
    }

    .file-list {
      list-style: none;
      padding: 0;
      margin: 20px auto;
      max-width: 300px;
    }

    .file-list li {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .file-list li span {
      font-weight: bold;
      margin-right: 10px;
    }

    .file-list li a {
      margin-left: 10px;
      text-decoration: none;
      color: #000;
    }

    .upload-button {
      display: block;
      margin: 20px auto;
      max-width: 200px;
    }
  </style>
</head>
<body>

<?php navbar(2) ?>

<div class="container mt-4">
        <div class="pt-5 my-2 text-center">
            <h1 style="color:22333b;" class="display-4 fw-bold text-body-emphasis mx-4">Gestionnaire de fichiers</h1>
            <div class="col-lg-6 mx-auto">
                <h4 class="lead mb-4">Voici la liste des partenaires</h4>
                <br>
            </div>
        </div>

  <div class="drop-zone" id="dropZone">
    <p class="text-secondary">Déplacez vos fichiers ici</p>
    <em class="text-secondary">(ou cliquez pour sélectionner les fichiers)</em>
  </div>
  <ul class="file-list" id="fileList"></ul>
  <button class="upload-button rounded" id="uploadButton" disabled>Envoyer les fichiers</button>
  <script>
    var dropZone = document.getElementById('dropZone');
    var fileList = document.getElementById('fileList');
    var uploadButton = document.getElementById('uploadButton');
    var filesArray = [];

    dropZone.addEventListener('dragover', function(e) {
      e.preventDefault();
      dropZone.style.border = '2px dashed #000';
    });

    dropZone.addEventListener('dragleave', function(e) {
      e.preventDefault();
      dropZone.style.border = '2px dashed #ccc';
    });

    dropZone.addEventListener('drop', function(e) {
      e.preventDefault();
      dropZone.style.border = '2px dashed #ccc';
      var files = e.dataTransfer.files;
      handleFiles(files);
    });

    dropZone.addEventListener('click', function() {
      var fileInput = document.createElement('input');
      fileInput.type = 'file';
      fileInput.multiple = true;
      fileInput.addEventListener('change', function(e) {
        var files = e.target.files;
        handleFiles(files);
      });
      fileInput.click();
    });

    uploadButton.addEventListener('click', function() {
      var formData = new FormData();
      filesArray.forEach(function(file) {
        formData.append('files[]', file);
      });

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'upload.php', true);
      xhr.onload = function() {
        // Handle response from server
        console.log(this.responseText);
      };
      xhr.send(formData);
    });

    function handleFiles(files) {
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var listItem = document.createElement('li');
        listItem.innerHTML = '<span>' + file.name + '</span>' + (file.size / 1024).toFixed(2) + ' KB';
        var link = document.createElement('a');
        link.href = URL.createObjectURL(file);
        link.download = file.name;
        link.innerHTML = 'Télécharger';
        listItem.appendChild(link);
        fileList.appendChild(listItem);
        filesArray.push(file);
      }

      if (filesArray.length > 0) {
        uploadButton.disabled = false;
      }
    }
  </script>
  
  <div class="d-flex justify-content-center align-items-center">
    <a href="view_files.php" class="btn btn-warning">Cliquez ici pour accéder à vos fichiers</a>
  </div>
</div>
  
  


</body>
</html>