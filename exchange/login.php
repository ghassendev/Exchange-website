<?php
error_reporting(0);
session_start();
if(isset($_POST['email'],$_POST['motpasse'])){

require('compte.php');
$nom="";
$prenom="";
$email=$_POST['email'];
$date="";
$telephone="";
$motpasse=$_POST['motpasse'];
$compte=new compte($nom,$prenom,$email,$date,$telephone,$motpasse);
$r=$compte->login();

$res = $r->fetch(PDO::FETCH_ASSOC);
    $u=$re['Nom'];
   
$_SESSION['Nom']=$res['Nom'];
$_SESSION['Prenom']=$res['Prenom'];
$_SESSION['Email']=$res['Email'];
$_SESSION['date']=$res['datenaissance'];
$n=$r->rowCount();
if($n>0){

    if($email=='admin'){
        header("location:afficheradmin.php");
    }
    else{
    header("location:acceuil.php");
    }
}
else{
    echo"<script>alert('email ou mot de passe incorrect') </script>";
    echo"<script>location.href='htmllogin.php'</script>";
    
}
}

?>