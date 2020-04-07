<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>
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
		.text{
			font-weight: 100;
			font-size: 14px;
		}


    </style>
    
     <h2 class="title">Add new glossary</h2><hr>
   
    
     <form action="add_glossary.php" method="post">
    <p><label>Title:</label> <input name="title" type="text" size="30" maxlength="200"></p>
   
    <p><label>Discipline:</label> 
    	<select   name="discipline">
         <option value="" selected disabled></option>
                <option value="Aerospace">Aerospace</option>
                <option value="Archaeology">Archaeology</option>
                <option value="Architecture">Architecture</option>
                <option value="Art" selected>Art</option>
                <option value="Cinema">Cinema</option>
                <option value="Economics">Economics</option>
                <option value="Zoology">Zoology</option>
        </select>
    </p>    
   <label>Term:</label>
   
    <select name="sourceLang">
       <option value="" selected disabled>Source Language</option>
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
	<p class="text">You must enter minimum of 3 terms and a maximum of 5</p>
   <p> <input name="source_term[]" type="text" size="20" maxlength="200"> &#10144;
     <input name="target_term[]" type="text" size="20" maxlength="200"></p>
   <p> <input name="source_term[]" type="text" size="20" maxlength="200"> &#10144;
     <input name="target_term[]" type="text" size="20" maxlength="200"></p>
   <p> <input name="source_term[]" type="text" size="20" maxlength="200"> &#10144;
     <input name="target_term[]" type="text" size="20" maxlength="200"></p>

 

</script>
 <div id="div"></div>
   

    <input type="button" value="Add term" onclick="addnewterm()">

    <p>
        <input type="submit" name="submit" value="Add glossary">
        <button><a href="page.php">Back</a></button>
    </p></form>


<script>
	 var count = 0;
	function addnewterm(){
count++;
		if(count<3){
  div.insertAdjacentHTML('beforebegin', '<p><input name="source_term[]" type="text" size="20" maxlength="200">'+
            ' &#10144; '+'<input name="target_term[]" type="text" size="20" maxlength="200"></p>');
}}
</script>
</body>
</html>