<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main page</title>
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
			margin-top: 50px;
		}
		 
		a{
		  text-decoration: none;
		} 

     table{
      font-size: 14px;
      margin: 0px auto;
      margin-top: 40px;
    }
    td{
      background: white;
      padding: 5px;
      border:0.2px solid black;
    }
	</style>


	<h1>All grossaries</h1>
	<hr>
	<p> <a href="add.php" class="add">Add new glossary</a></p>	
	<hr>
	 <form action="search.php" method="post"> 
	 	Search glossary: 
    	<select  name="discipline">
         <option value="" selected disabled></option>
                <option value="Aerospace">Aerospace</option>
                <option value="Archaeology">Archaeology</option>
                <option value="Architecture">Architecture</option>
                <option value="Art" selected>Art</option>
                <option value="Cinema">Cinema</option>
                <option value="Economics">Economics</option>
                <option value="Zoology">Zoology</option>
        </select>

     <select  name="sourceLang">
        <option value="" selected disabled>Target Language</option>
                <option value="Azerbaijani">Azerbaijani</option>
                <option value="Belarusian">Belarusian</option>
                <option value="Dutch">Dutch</option>
                <option value="English" selected>English</option>
                <option value="German">German</option>
                <option value="Italian">Italian</option>
                <option value="Romanian">Romanian</option>
                <option value="Ukrainian">Ukrainian</option>
        </select>
		to
       <select name="targetLang">
         <option value="" selected disabled>Target Language</option>
                <option value="Azerbaijani">Azerbaijani</option>
                <option value="Belarusian">Belarusian</option>
                <option value="Dutch">Dutch</option>
                <option value="English" selected>English</option>
                <option value="German">German</option>
                <option value="Italian">Italian</option>
                <option value="Romanian">Romanian</option>
                <option value="Ukrainian">Ukrainian</option>
        </select>

      <input type="submit" value="Search" >

  </form>
	<hr>

	<?php 
	include ("bd.php");
	$result = mysql_query("SELECT sourceLang, targetLang, discipline, title, term, translation FROM glossary" ,$db);
	
  echo'<table><tr><td>sourceLang</td><td>targetLang</td><td>discipline</td><td>Title</td><td>Term</td><td>Translation</td></tr>';
  while($row = mysql_fetch_assoc($result)){
    echo '<tr><td>'.$row["sourceLang"].'</td>';
    echo '<td>'. $row["targetLang"].'</td>';
    echo '<td>'. $row["discipline"].'</td>';
    echo '<td>'. $row["title"].'</td>';
    echo '<td>'. $row["term"].'</td>';
    echo '<td>'. $row["translation"].'</td></tr>';
  }?>


</body>
</html>