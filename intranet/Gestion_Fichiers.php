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
    }

    .file-list li span {
      font-weight: bold;
      margin-right: 10px;
    }
  </style>
</head>
<body>

<?php navbar(2) ?>

<h2>Gestionnaire de fichiers</h2>
  <div class="drop-zone" id="dropZone">
    Déplacez vos fichiers ici<br>
    <em>(ou cliquez pour sélectionner les fichiers)</em>
  </div>
  <ul class="file-list" id="fileList"></ul>

  <script>
    var dropZone = document.getElementById('dropZone');
    var fileList = document.getElementById('fileList');

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

    function handleFiles(files) {
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var listItem = document.createElement('li');
        listItem.innerHTML = '<span>' + file.name + '</span>' + (file.size / 1024).toFixed(2) + ' KB';
        fileList.appendChild(listItem);
      }

      var formData = new FormData();
      for (var i = 0; i < files.length; i++) {
        formData.append('files[]', files[i]);
      }

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'upload.php', true);
      xhr.onload = function() {
        // Handle response from server
        console.log(this.responseText);
      };
      xhr.send(formData);
    }
  </script>

  


</body>
</html>