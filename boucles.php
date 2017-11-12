<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>



<?php

$countries=array('Belgique','France','Espagne','Italie','Allemagne','Turquie','Finlande','Mexique','Norvège','Suisse');
$countriesiso=array('BE'=>'Belgique','FR'=>'France','ES'=>'Espagne','IT'=>'Italie','AL'=>'Allemagne','TU'=>'Turquie','FI'=>'Finlande','ME'=>'Mexique','NO'=>'Norvège','SU'=>'Suisse');


?>

<select>
<?php
foreach ($countries as $Country) {
  echo '<option value="'.$Country.'">'.$Country.'</option>';
}
?>
</select>

<select>
<select>
<?php
foreach ($countriesiso as $iso =>$Countries) {
  echo '<option value="'.$iso.'">'.$Countries.'</option>';
}

?>
</select>
</body>
</html>
