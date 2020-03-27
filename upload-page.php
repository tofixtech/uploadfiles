<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload de arquivos - Tofix Tech</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
    crossorigin="anonymous"
  >
  <link rel="stylesheet" href="styles-up.css">
  <link rel="stylesheet" href="global.css">
</head>
<body>
  <div id="container">
    <div id="form-file">
      <form id="formUp" enctype="multipart/form-data" method="POST">
        <div class="input-block">
          <label for="file">Arquivo</label>
          <input type="file" name="userfile" id="file">
        </div>
        <div class="input-block">
          <button type="submit" id="btnSub">
            <span id="spnSend">Enviar</span>
          </button>
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