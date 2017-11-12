<?php

echo ucfirst("stephane");
echo '<br/>';
echo date('Y');
echo '<br/>';

echo date("d-m-Y");


echo '<br/>';


//Crée une fonction prenant deux arguments numériques et qui retourne la somme de ces deux arguments.

//si les variables sont différentes de chiffre
//on prend is_int si integer (chiffre)


function calcul($Chiffrea,$Chiffreb)
{
if(is_int($Chiffrea) ==true && is_int($Chiffreb)==true ){
  return $Chiffrea + $Chiffreb;
}
else {
  "Erreur! Argument non numérique";
}

}

echo calcul(8,6);

echo '<br/>';
echo '<br/>';


// $chaine = 'i love web design';
// $chaine = str_shuffle($chaine);
//
// Mettre les initiale en cap

// function initial($cite)
// {
// $words =explode("",$cite);
// $initiale='';
// foreach ($words as $init) {
//   $initiale .=$init{0};
//   # code...
// }
// return $cite($initiale);
//
// }
//
// $cite="le code est bon";


function soleil($input){
  $newInput = ucwords($input);
  return preg_replace('/[^A-Z]/', '', $newInput);
};
echo soleil("il est gros et rond");
echo "<hr>";



function ae($input) {
 return str_replace("æ","ae",$input);
};



echo ae("caecotrophie , chaenichthys , microsphaera , sphaerotheca");
echo "<hr>";


function generator ($size){
   $lettre=["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r","s","t","u","v","w","x", "y", "z"];
  for ($i=0;$i < $size; $i++) {
    $word.= $lettre[array_rand($lettre)];
  };
        return $word;
};

echo generator (5);
echo generator (10);
echo "<hr>";









?>
