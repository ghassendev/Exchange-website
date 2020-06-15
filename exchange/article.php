<?php
if (isset($_POST['tp'],$_POST['sujet'])) {
session_start();
require('post.php');
$tp=$_POST['tp'];
$sujet=$_POST['sujet'];
$date=date("Y-m-d ");
$par=$_SESSION['Prenom'];
$post=new post(0,$tp,$sujet,$date,$par);
$res=$post->ajout();
echo"<script>alert('post ajouter avec succes') </script>";
 echo"<script>location.href='htmlarticle.php'</script>";
}
else 
{
echo"erreur";
}

?>