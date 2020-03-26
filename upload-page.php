<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload de arquivos - Tofix Tech</title>
  <link rel="stylesheet" href="styles-up.css">
  <link rel="stylesheet" href="global.css">
</head>
<body>
  <div id="container">
    <div id="form-file">
      <form id="formUp" enctype="multipart/form-data" method="POST" action="upload-file.php">
        <div class="input-block">
          <label for="file">Arquivo</label>
          <input type="file" name="file" id="file">
        </div>
        <div class="input-block">
          <button type="submit"><span>Enviar</span></button>
        </div>
      </form>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="upload.js"></script>
</body>
</html>