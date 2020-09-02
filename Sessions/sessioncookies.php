<?php

  session_start();
  $_SESSION['nome'] = 'hernani';
  setcookie('nome','hernani',time() + (60*60*24),'/');
  //destroi cookie
 // setcookie('nome','hernani',time() - (60*60*24),'/');
  echo $_COOKIE['nome'];
?>  