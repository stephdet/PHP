<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ternaire</title>
</head>
<body>
	


<form method="post" action="ternaire.php" >
<label for='case'>genre</label>
<input type="checkbox" value="H" name="sexe"><label for='homme'>masculin</label>
<input type="checkbox" value="F" name="sexe"><label for='femme'>féminin</label>	
<input type="submit" value="ok">


</form>


<?php
$bonjour=$_POST["genre"];

$genre = ($bonjour == "H") ? "Bonjour Monsieur":"Bonjour Madame";
echo $genre;
?>



</body>
</html>