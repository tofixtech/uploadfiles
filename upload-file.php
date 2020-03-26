<?php 
  $dirFiles = "/files";

  $uploadFile = $dirFiles . basename ($_FILES['file']['name']);

  print_r($uploadFile);

  if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)){
    echo '1:Arquivo enviado com sucesso!';
  } else {
    echo '2:Erro ao enviar arquivo!';
  }

?>