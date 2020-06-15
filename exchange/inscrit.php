<?php

if (isset($_POST['nom'] , $_POST['prenom'] , $_POST['email'] , $_POST['date'] , $_POST['telephone'] , $_POST['motpasse'])) {
require('compte.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$date=$_POST['date'];
$telephone=$_POST['telephone'];
$motpasse=$_POST['motpasse'];
$compte=new compte($nom,$prenom,$email,$date,$telephone,$motpasse);
$res=$compte->inscription();
header("location:htmllogin.php");
}
else 
{
echo"erreur";
}
?>