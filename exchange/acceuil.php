<?php

session_start();
if(isset($_SESSION['Nom'],$_SESSION['Prenom'])){
//$url='https://api.exchangerate-api.com/v4/latest/USD';
//$url='https://api.exchangeratesapi.io/latest';
//$url='api.txt';
if(!$sock = @fsockopen('www.google.com', 80))
{
    $url='api.txt';
}
else
{

        
    $url='https://api.exchangerate-api.com/v4/latest/USD';
    $n='api.txt';
    copy($url,$n);

}

echo "<h2><ul><li> Bienvenue ",$_SESSION['Nom']," ",$_SESSION['Prenom'],"</li>";
echo"<li style='float:right'><a href='deconnexion.php'>Deconnexion</a></li><ul><br></h2>";

function KeySearch($json, string $search)
{
	foreach ($json as $key=>$val)
	{
		
		if(is_array($val) || is_object($val)) {
			return KeySearch($val, $search);
		}
		elseif($key == $search)
		{
			return $val;
			break;
		}
	}
	return false;

}



function cur($json){
    echo"
    <style>
    p{
        background:#8A2BE2;
        color: #ffffff;
        display: inline-block;
        font-family: 'Lato', sans-serif; font-size: 50px;
        font-weight: bold;
        line-height: 45px;
        letter-spacing:10px;
        margin: 0px 60% -450px;
        padding: 20px 35px 15px;
        text-transform: uppercase;
        
    }
    h4{

            background:#8A2BE2;
            color: #ffffff;
            display: inline-block;
            font-family: arial; font-size: 20px;
            font-weight: bold;
            line-height: 45px;
            letter-spacing:2px;
            margin: 20% 55% -450px;
            padding: 20px 150px 15px;
            text-align: left;
            
    }

li a {
    float:right;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  
  .active {
    background-color: #4CAF50;
  }

 h1 { 
      background:#8A2BE2;
     color: #ffffff;
     display: inline-block;
     font-family: 'Lato', sans-serif; font-size: 16px;
     font-weight: bold;
     line-height: 16px;
     letter-spacing: 1px;
     margin: 0 0 30px;
     padding: 10px 15px 8px;
     text-transform: uppercase;
     }



    td,th {
        border: 1px solid rgb(190, 190, 190);
        padding: 10px;
    }
    
    td {
        text-align: center;
    }
    
    tr:nth-child(even) {
        background-color: #eee;
    }
    
    th[scope=col] {
        background-color: #696969;
        color: #fff;
    }
    
    th[scope=row] {
        background-color: #d7d9f2;
    }
    
    caption {
        padding: 10px;
        caption-side: bottom;
    }
    
    table {
        border-collapse: collapse;
        border: 2px solid rgb(200, 200, 200);
        letter-spacing: 1px;
        font-family: sans-serif;
        font-size: .8rem;
        background-color: white;
    }
    body{
        background-color:black;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;0
        background-color: #333;
        
      }
      
      li {
        
        float:left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      li hover {
        background-color: #111;
        
      }
          
    ";
    echo"</style>"  ;



    
    echo "<table border='1' style=width:50%> "; 
    echo "<tr><td> Devise </td>
    <td> Montant Par rapport dollar </td> </tr>";
    foreach ($json['rates'] as $cur=>$val )
    {
        echo"<tr>";

         echo"<th scope=col>". $cur."</th>";
         echo"<th scope=row>".$val."</th>";
         echo"</tr>";       
      }   
    
       echo "</table>";
    }





$api=file_get_contents($url);

$json = json_decode($api, true);
$find=KeySearch($json,'date');


echo "<body><h1>La date d'aujourdhui est :".$find ."
<br>",date('h:i:s a')," </h1>";
echo"<p><a href='htmlarticle.php'>publier votre supposition </a></p>";

echo"<h4>

Transferer_votre_dollar_en:
<form action='acceuil.php' method=post>
<input type='number' name='usd'>
<select name='change'>";
foreach ($json['rates'] as $cur=>$val ){
    echo"<option value=".$val.">".$cur."</option>";
    
}
echo"</select>
<br><input type='submit'>

</form>

</h4>";

    
$currencies=cur($json);
    }

else{
    header("Location:htmllogin.php");
}

error_reporting(0);

require("compte.php");
$s=$_POST["usd"];
$v=$_POST["change"];

$compte=new compte();
$res=$compte->calcul($s,$v);
if($res!=0){
    echo"
    <html>
    <head>
    <style>

    </style>
    </head>
    <body>
    <script>alert('Vos dollars egale =",$res,"')</script>";
    // echo"<script>alert('user supprimer avec succes') </script>";
    //echo"<script>location.href='afficheruser.php'</script>";

}

?>