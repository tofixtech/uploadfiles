<?php
$dirFiles = "files/";

$uploadFile = $dirFiles . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile)) {
  echo '1:Arquivo enviado com sucesso!';
} else {
  echo "2:Erro ao enviar arquivo!";
}
?>