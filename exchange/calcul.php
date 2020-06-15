<?php


    require("compte.php");
    $s=$_POST["usd"];
    $v=$_POST["change"];
  
    $compte=new compte();
    $res=$compte->calcul($s,$v);
   
    echo"<h1 style='color:red'>",$res;
   // echo"<script>alert('user supprimer avec succes') </script>";
    //echo"<script>location.href='afficheruser.php'</script>";






?>