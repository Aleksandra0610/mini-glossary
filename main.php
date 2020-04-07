<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini-glossary</title>
 
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&display=swap" rel="stylesheet">
</head>
<body>
	<style>
		body{
			margin:0px auto;
			background: url('img/fon.jpg')no-repeat;
			background-size: 100%;
			text-align: center;
			font-family: 'Roboto Mono', monospace;
		}
		h1{
			margin-top:100px;
		}
		h3{
			font-weight:300;
			margin-bottom: 50px;
		}
		
		a{
			font-weight: 500;
			color: white;
			text-decoration: none;
			padding: 5px 10px;
			border-radius: 3px;
			background: rgb(0, 191, 255);
			box-shadow: 0 -3px rgb(0, 0, 255) inset;
			transition: 0.1s;
		} 
		a:hover { 
			background: rgb(0, 206, 209); 
		}
		.register{
			margin-right: 40px;
		}
		
	</style>
	<h1> WELCOME<br>TO MINI-GLOSSARY</h1>
	<h3>for use of application you need to register or log in</h3>	
	<a href="register.php" class="register">Register</a>
	<a href="login.php" class="login"> Login</a>
	

</body>
</html>