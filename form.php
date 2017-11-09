<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<!--EXE 3-4-7-8 -->

<form method="post" action="form.php">
<p>Votre age</p>
<input type="number" name="age">
<label for='case'>genre</label>
<input type="checkbox" value="homme" name="sexe"><label for='homme'>masculin</label>
<input type="checkbox" value="femme" name="sexe"><label for='femme'>féminin</label>
<label for='case'>Vous parlez l'anglais ?</label>
<input type="checkbox" value="anglais" name="langue"><label for='langue'>yes</label>
<input type="checkbox" value="pasanglais" name="langue"><label for='langue'>no</label>

<input type="submit" value="ok">
<input type="reset" value="Reset">
</form>

<br />
<br />
<br />


<?php
/*
$age=$_POST["age"];
$sexe=$_POST["sexe"];
$langue=$_POST["langue"];



if ($age>=12) {
if ($sexe=="femme") {
	echo "Salut petite";
}
}

if ($age>=12 AND $age<=18 ) {
if ($sexe=="femme" AND $langue=="anglais" ) {
	echo "Hello Teenagegirl";
}
}

if ($age>=12 AND $age<=18 ) {
if ($sexe=="homme") {
	echo "Salut adolescent";
}
}

else {
 $message= "wow tu es toujours vivante";
}

if ($age>=21 AND $age<=40) {
	if ($sexe=="femme") {
	$message="Bonjour, bienvenu parmi nous !";
	}
	
}

else {
	$message="Désolé, vous ne remplissez pas les critères de sélection.";
}

echo $message;
*/












?>













</body>
</html>