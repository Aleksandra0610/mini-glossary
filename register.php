<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
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
		hr{
			width: 100px;	
		}
		.title{
			margin-top: 60px;
		}
		a{ 
			color: black;
			text-decoration: none;
		}

	</style>
	<div class="title">
		<hr><h2>Register</h2><hr>
	</div>
	
	 <form action="register_user.php" method="post">

	 <p>
	    <label>User name:</label>
	    <input name="userName" type="text" size="15" maxlength="15">
    </p>
	<p>
		<label>Your login:</label>
   		<input name="login" type="text" size="15" maxlength="15">
    </p>

	<p>
	    <label>Password:</label>
	    <input name="password" type="password" size="15" maxlength="15">	
    </p>
  
   

	<p>
	    <input type="submit" name="submit" value="Register now">
	    <button><a href="main.php">Back to menu</a></button>
	</p>
</form>

</body>
</html>