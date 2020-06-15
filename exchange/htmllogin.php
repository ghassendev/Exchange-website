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
	width: 320px;
	height: 420px;
	background: rgba(0,0,0,0.5);
	color:#fff;
	top:50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
	border-radius: 2px;
}

.avatar{
	width: 100px;
	height: 100px;
	border-radius:50%;
	position: absolute;
	top:-50px;
	left: calc(50% - 50px);
}
h1{
	margin:0px;
	padding:0 0 20px;
	text-align:center;
	font-size: 22px;
}

.login-box p{
	margin:0px;
	padding:0px;
	font-weight:bold;
}

.login-box input{
	width: 100%;
	margin-bottom: 20px;
}

.login-box input[type=email], input[type=text], input[type=password]{
border:none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height:40px;
color:#fff;
font-size:16px;
}

.login-box input[type=submit]{
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
	<title>Login Page</title>
	
</head>
<body>

	<div class='full'>

	<div class='login-box'>
		<img src='home.png' class='avatar'>
		<h1>Connectez Ici</h1>
		<form action='login.php' method='post'>
			<p>E-mail</p>
			<input type='text' name='email' placeholder='Saisir votre E-mail'>
			<p>Mot de  passe</p>
			<input type='password' name='motpasse' placeholder='Saisir votre mot de passe'>
			<input type='submit'  value='Connectez'>
			
			<br/>
			<div class='reg'>
				Vous n'avez pas un Compte? <br>
				<a href='htmlincription.php'>Inscrivez vous</a>
			</div>

		</form>

	</div>
</body>
</html>