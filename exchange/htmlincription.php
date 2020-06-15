<!DOCTYPE html>
<html>
<head>


    <style>
    
 body{
	margin:0px;
	padding:0px;
	background: url(home.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}


.login-box{
	width: 420px;
	height: 920px;
	background: rgba(0,0,0,0.5);
	color:#fff;
	top:50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
    border-radius: 2px;
    margin-top: 100px;
}


h1{
	margin:0px;
	padding:0 0 20px;
	text-align:center;
    font-size: 22px;
    top:50px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-style:italic;


    border:none;
	outline:none;
	height: 24px;
	background:#E0FFFF;
	color: blue;
	font-size:35px;
    border-radius: 50px;
    
}

.login-box p{
    margin-top:20px;
	margin:10px;
	padding:0px;
    font-weight:bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-style: oblique;
}

.login-box input{
	width: 100%;
	margin-bottom: 20px;
}

.login-box input[type=text], input[type=password], input[type=email],input[type=date],input[type=number]{
border:none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height:40px;
color:#fff;
font-size:16px;
}

.login-box input[type=submit],input[type=button]{
    border:none;
	outline:none;
	height: 48px;
	background: #1c8adb;
	color: #fff;
	font-size:18px;
	border-radius: 50px;
}

.login-box input[type=submit]:hover{
	cursor: pointer;
	background: #39dc79;
	color:#000;
}
.login-box input[type=button]:hover{
    cursor: pointer;
    background: red;
    color: rgba(0,0,0,0.5);

}
.login-box a{
	text-decoration:none;
	font-size:14px;
	color:#fff;
}

.login-box a:hover{
	color:#39dc79;
}

.login-box .reg{
	margin-top: 15px;
	color:#fff;
	width: 100%;
	font-weight: normal;
	text-align: center;
}

</style>

<title>Register Page</title>
</head>

<body>

	<div class='full'>

	<div class='login-box'>
		
	
		<form action='inscrit.php' method='post'>
			
                <h1>Fiche d'inscription</h1>
                
                  <p>Nom : </p>
                <input type='text' name='nom' placeholder='Entrer votre nom' required>
                <p>Prenom : </p>
                <input type='text' name='prenom' placeholder='Entrer votre prnom' required>
           
                <p>Aresse mail : </p>
                <input type='email' name='email' placeholder='Entrer votre email' required>
                <p>Date de naissance : </p>
                <input type='date' name='date' placeholder='Entrer votre date de naissance' required>
                <p>Numero de telephone : </p>
                <input type='number' name='telephone' placeholder='Entrer votre numero de telephone' required>
            
            
                <p>Mot de passe : </p>
                <input type='password' name='motpasse' placeholder='Entrer votre mot de passe' required>
            
            <input type='submit'  value='Inscrire'><br>
            
		
			<br/>
			<div class='reg'>
				Vous avez deja un compte ?
				<a href='htmllogin.php'>Connectez vous</a>
			</div>

		</form>

	</div>
</body>
</html>