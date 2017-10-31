<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>form</title>
</head>
<body>

<form method="post" action="cible.php">
<fieldset><input type="text" size="14" name="prenom" placeholder="prenom de l'enfant"></fieldset>
<fieldset><input type="text" size="14" name="prenominst" placeholder="prenom de l'instititrice"></fieldset>
<p>motifs de l'abscence</p>
<input type="checkbox" name="case1"  /> <label for="case">maladie</label>
<input type="checkbox" name="case2"  /> <label for="case">décès de l'animal de compagnie</label>
<input type="checkbox" name="case3"  /> <label for="case">activité extra-scolaire importante</label>
<input type="checkbox" name="case4"  /> <label for="case">toute autre excuse de ton choix</label>
<fieldset><textarea placeholder="Votre message" cols="20" rows="5"></textarea></fieldset>



<br />
<br />
<br />
<input type="submit" id="contactsubm" value="Envoyer">



</form>
</body>
</html>

<!--
maladie
décès de l'animal de compagnie (ou d'un membre de la famille)
activité extra-scolaire importante
toute autre excuse de ton choix -->
