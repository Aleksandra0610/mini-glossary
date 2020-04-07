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

    </style>
    <div class="title">
        <hr><h2>Login</h2><hr>
    </div>
    
     <form action="login_user.php" method="post">
    <p>
        <label>Login:<br></label>
        <input name="login" type="text" size="15" maxlength="15">
    </p>

    <p>
    <label>Password:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
        <input type="submit" name="submit" value="Login">
    </p></form>
</body>
</html>