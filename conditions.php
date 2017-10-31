<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fonctions</title>
</head>
<body>
<p>la réponse est</p>

<?php
$heure = date("H");
$message =("il est approximativement") . &heure  .heures);

if ($heure >=5 AND $heure <= 9) {
  echo "Bonjour !" .$message;
}

elseif ($heure >=9 AND $heure <=12){
  echo "Bonne journée !" .$message;
}

elseif ($heure >=12 AND $heure <=16){
  echo "Bon après-midi !" .$message;
}

elseif ($heure >=12 AND $heure <=16){
  echo "Bon après-midi !" .$message;
}

else
       {
   echo "Vous vivez dans un autre espace temps ! Mais tout est relatif !";
     };

?>
<form>
<label for="age_utilisateur">quel est votre âge ?</label>
    <input type="number" name="age_utilisateur" id="age_utilisateur"/>
    <input type="submit" value="Submit">
</form>






</body>
</html>
