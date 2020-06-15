<?php
    require("admin.php");
    $Email=$_POST["mail"];
    
    $admin=new admin();
    $admin->supprimeruser($Email);
    
    echo"<script>alert('user supprimer avec succes') </script>";
    echo"<script>location.href='afficheruser.php'</script>";

?>