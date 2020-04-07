 <style>
   body{
      margin:0px auto;
      background: url('img/fon.jpg')no-repeat;
      background-size: 100%;
      text-align: center;
      font-family: 'Roboto Mono', monospace;
    }
    table{

      margin: 0px auto;
      margin-top: 40px;
    }
    td{
      background: white;
      padding: 5px;
      border:1px solid blue;
    }
    a{
      margin-top: 120px;
      text-decoration: none;
      padding: 10px;
    }
 </style>

<?php
    $discipline = $_POST['discipline'];
    $sourceLang = $_POST['sourceLang'];
    $targetLang = $_POST['targetLang'];
    include ("bd.php");
     
    $result = mysql_query("SELECT title, term, translation FROM glossary WHERE discipline='$discipline' AND  sourceLang='$sourceLang'  AND targetLang='$targetLang' " ,$db);

    if (!$result) {
        echo "Could not successfully run query  from DB: " . mysql_error();
        exit;
    }
    
    if (mysql_num_rows($result) == 0) {
        echo 'No rows found, nothing to print so am exiting<button> <a href="page.php">Back</a></button>';
        exit;
    }

   echo'<table><tr><td>Title</td><td>Term</td><td>Translation</td></tr>';
      while($row = mysql_fetch_assoc($result)){
       
        echo '<tr><td>'.$row["title"].'</td>';
        echo '<td>'. $row["term"].'</td>';
        echo '<td>'. $row["translation"].'</td></tr>';
    }
     echo '<button><a href="page.php">Back</a></button>';
   
    mysql_free_result($result);
?>