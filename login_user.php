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
        
    if (empty($login) or empty($password)) 
        { exit ("You did not enter all the information, go back and completely all the fields!<a href='login.php'>Login</a>");
        }
       
       
    $login = stripslashes(htmlspecialchars(trim($login)));
    $password = stripslashes(htmlspecialchars(trim($password)));
      
    include ("bd.php");
     
    $result = mysql_query("SELECT * FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password'])){
        exit ("Sorry, the login you entered or the password is incorrect.");
     }
    else {
    
    if ($myrow['password']==$password) {
        $_SESSION['login']=$myrow['login']; 
        $_SESSION['id']=$myrow['id'];
        echo "Successful, go to <a href='page.php'>main page</a>";
        }
     else {
        exit ("Sorry, the login you entered or the password is incorrect. ");
        }
    }
?>