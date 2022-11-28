<?php
  session_start();

  if (!isset($_SESSION['logado'])){
     header("Location: ../indexsuite.php");
  }

  if ( $_SESSION['logado'] == false){
     header("Location: ../indexsuite.php");
  }

  $menu = "Não foi possivel achar o menu.";
  if(file_exists("../html/suites.html")){
     $menu = file_get_contents("../html/suites.html");
  }
  echo $menu;
?>