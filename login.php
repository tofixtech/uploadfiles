<?php 
  $login = $_POST['login'];
  $passwd = $_POST['passwd'];

  if($login === 'teste' && $passwd === 'teste') {
    session_start();
    if (!isset ($_SESSION['logado'])) {
      $_SESSION['logado'] = 1;
    }
    echo '1';
  } else {
    echo '2';
  }

?>