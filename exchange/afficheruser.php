<?php

session_start();
if($_SESSION['Email']=='admin'){
require("admin.php");
$admin=new admin();
$res=$admin->afficheruser();
echo"<body style='background-color:black'>";


echo"
<head>
<style>
li a {
    float:right;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  </style>
  </head>
  <body>
<h2><li style='float:right'><a href='deconnexion.php'>Deconnexion</a></li><br></h2>";


echo"<center style='color:blue'><h1>Liste des utilisateurs<h1></center>
<h1 style='color:white'><a href='afficheradmin.php'>Voir les publications des utilisateurs</a></h1>";
  

        
        echo"
           <!DOCTYPE html>
<html>
<head>
<style type='text/css'>
table{
	height:5%;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 0px;
    border: 6px solid #305A72;
    width:80%;
    word-wrap: break-word;    
    box-sizing: 50%;
	font-family: 'Times New Roman', Times, serif;
	
	table-layout:fixed;
	
}


body{

  background-color:black;
}

p{
    width:50%;
    
    word-wrap: break-word;
}
h2{
    color:green
    }  
 input[type=submit]{
    border:none;
    outline:none;
    height: 48px;
    background: #1c8adb;
    color: #fff;
    font-size:18px;
    border-radius: 0px;
        }
input[type=submit]:hover{
    cursor: pointer;
    background: red;
    color:#000;
        }
</style>
</head>
<body>


<table >
<form method=post action='supprimeruser.php'>

<tr >
<td> <h2>supprimer?</h2></td>
<td><h2> Nom:</h2></td>
<td ><h2>Prenom:</h2></td>
<td> <h2>Email:</h2></td>
<td><h2> Date naissance:</h2></td>
<td><h2>Telephone</h2></td>
<td><h2>Mot de passe</h2></td>
</tr>";

while($f=$res->fetch()){
echo"<tr>
<td><input type='radio' value=".$f['Email']." name='mail'></td>

<td >".$f['Nom']." </td>
<td >".$f['Prenom']." </td>
<td >".$f['Email']." </td>
<td >".$f['datenaissance']." </td>
<td >".$f['telephone']." </td>
<td >".$f['motpasse']." </td>";

}
echo"<tr><td><input type='submit' value='Supprimer'></td></tr>
</form>
</body>
</html>";
       
 
}
else{


    header("Location:htmllogin.php");
    }
?>