<?php
  session_start();

  if (!isset($_SESSION['logado'])){
     header("Location: ../index.php");
  }

  if ( $_SESSION['logado'] == false){
     header("Location: ../index.php");
  }

  $menu = "Não foi possivel achar o menu.";
  if(file_exists("../html/quartosp2.html")){
     $menu = file_get_contents("../html/quartosp2.html");
  }
  echo $menu;
?>