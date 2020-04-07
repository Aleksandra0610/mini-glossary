<?php
    if (isset($_POST['login'])) { 
        $login = $_POST['login']; 
        if ($login == '') {
            unset($login);
        } 
    } 
    if (isset($_POST['password'])) { 
        $password=$_POST['password']; 
        if ($password =='') { 
            unset($password);
        } 
    }

    if (isset($_POST['userName'])) { 
        $userName=$_POST['userName']; 
        if ($userName =='') { 
            unset($userName);
        } 
    }
   
   
     if (empty($login) or empty($password) or empty($userName)) {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
     }
   
    $login = stripslashes(htmlspecialchars(trim($login)));
    $password = stripslashes(htmlspecialchars(trim($password)));
    include ("bd.php");
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
         exit ("Sorry, this user already exists");
    }

    $result2 = mysql_query ("INSERT INTO users (userName, login, password) VALUES('$userName', '$login','$password')");

    if ($result2=='TRUE'){
        echo "Successful, go to <a href='page.php'>main page</a>";
    }
    else {
        echo "Error! You not register.";
    }
?>