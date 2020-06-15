<?php
session_start();
if($_SESSION['date']=='0000-00-00') {
require("admin.php");
$admin=new admin();
$res=$admin->afficherpost();
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
echo"<body style='background-color:black'>";
echo"<center style='color:blue'><h1>Les publication<h1></center>
<h1 style='color:white'><a href='afficheruser.php'>Voir la liste des utilisateurs</a></h1>";


  

           while($f=$res->fetch()){
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
input[type=submit]:hover{
	cursor: pointer;
	background: red;
	color:#000;
}

input[type=radio]:hover{
	cursor: pointer;
	background: red;
	color:red;
}

body{

  background-color:black;
}

p{
    width:50%;
    
    word-wrap: break-word;
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
input[type=radio]{
    background-color:blue;
    height:25px;
    width:25px;
    cursor:pointer;
    display:block;


}


</style>
</head>
<body>


<table >
<form method=post action='supprimerpost.php'>
<tr>
<td> ID post :".$f['id']." Supprimer?</td>
<td><input type='radio' value=".$f['id']." name='supp'></td>
</tr>
<tr >
<td> Type:</td>
<td >".$f['type']."</td>
</tr>
<tr>
<td > sujet:</td>
<td><p>".$f['sujet']."<p></td>
</tr>
<tr>
<td > date:</td>
<td >".$f['date']."</td>
</tr>
<tr >
<td > par:</td>
<td >".$f['par']."</td>
</tr>

<tr><td><input type='submit' value='Supprimer'></td></tr>
</body>
</html>";
       
 }
}

else{


    header("Location:htmllogin.php");
    }
           
?>