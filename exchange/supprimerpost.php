<?php
    require("admin.php");
    $id=$_POST["supp"];
    $admin=new admin();
    $admin->supprimerpost($id);
  
    echo"<script>alert('post supprimer avec succes') </script>";
    echo"<script>location.href='afficheradmin.php'</script>";
?>