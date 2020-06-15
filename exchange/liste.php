<?php

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
    width:40%;
    word-wrap: break-word;    
    box-sizing: 50%;
    font-family: 'Times New Roman', Times, serif;
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

?>