<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de gerenciamento de upload de arquivos - Tofix Tech</title>
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <div id="form-login">
      <form id="frm-login">
        <div class="input-block">
          <label for="login" >Login</label>
          <input type="text" name="login" required autofocus>
        </div>
        <div class="input-block">
          <label for="senha" >Senha</label>
          <input type="password" name="passwd" required>
        </div>
        <div class="input-block">
          <button type="submit" id="sub-log"><span>Logar</span></button>
        </div>
      </form>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="login.js"></script>
</body>
</html>