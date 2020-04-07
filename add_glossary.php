<?php
    $title = $_POST['title'];
    $discipline = $_POST['discipline'];
    $sourceLang = trim($_POST['sourceLang']);
    $targetLang = $_POST['targetLang'];

	while($_POST['source_term'][$i]){
		$source_term[i] = $_POST['source_term'][$i];
		$i++;
	}

	while($_POST['target_term'][$j]){
		$target_term[j] = $_POST['target_term'][$j];
		$j++;
	}

	include ('bd.php');
     for($i=0;$i<count($source_term); $i++){
        $result2 = mysql_query ("INSERT INTO glossary(sourceLang, targetLang, discipline, title, term, translation) 
            VALUES('$sourceLang', '$targetLang','$discipline','$title','$source_term[$i]','$target_term[$i]') ");
         $result1 = mysql_query ('UPDATE GLOSSARY SET sourceLang = replace(sourceLang," ",""');
    }

    if ($result2=='TRUE'){
        echo "Successful, go to <a href='page.php'>main page</a>";
    }
    else {
        echo "Error! <a href='add.php'>Add glossary</a>";
    }
 

?>