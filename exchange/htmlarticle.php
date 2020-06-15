<?php
session_start();
if(isset($_SESSION['Nom'],$_SESSION['Prenom'])){
	

	echo"


<!DOCTYPE html>
<html>
<head>
<style type='text/css'>
.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type='button'], 
.form-style-9 ul li input[type='submit'] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type='button']:hover, 
.form-style-9 ul li input[type='submit']:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
body{

  background-color:black;
}
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

<li style='float:right'><h1><a href='deconnexion.php'>Deconnexion</a></h1></li><ul><br></h2>
<h1 style='color:white'> <a href='acceuil.php'>Calculer votre devise </a></h1>
<form action='article.php' method='post' class='form-style-9'>
<ul>
<li>
    <input type='text' name='tp' maxlength='3' class='field-style field-split align-left' placeholder='Type en 3 caractères' />
    
</li>
<li>
<textarea name='sujet' class='field-style' placeholder='Sujet'></textarea>
</li>
<li>
<input type='submit' value='publier' />
</li>
</ul>
</form>
</body>
</html>";




require("post.php");
$article=new post();
$res=$article->afficher();
echo"<body style='background-color:black'>";
echo"<center style='color:blue'><h1>Les publication<h1></center>";

  

           while($f=$res->fetch()){
        echo"
           <!DOCTYPE html>
<html>
<head>
<style type='text/css'>
table{
	height:50%;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 20px;
    border: 6px solid #305A72;
    width:50%;
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
</style>

</head>
<body>


<table >
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
</body>
</html>";
       





		   }
}else
{
	header('location:htmllogin.php'); 
}
?>