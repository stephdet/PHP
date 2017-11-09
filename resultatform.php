<?php

/*$Age=$_GET["age"];
$Homme=$_GET["homme"];
$Femme=$_GET["femme"];



if ($age>=12 AND $Homme==true) {
	echo "Salut petit";
} else if ($age>=12 AND $Femme==true) {
	echo "Salut petite";

} else if ($age>=12 AND $age<=18 AND $Femme==true) {
		echo "Salut l'adolescente";

} else if ($age>=12 AND $age<=18 AND $Homme==true) {
		echo "Salut l'adolescent";
}else {
 echo "wow tu es toujours vivante";
}
*/ 

$Note=$_GET["note"];
if ($_GET["note"]==1 && $_GET["note"] ==2 OR $_GET["note"]==3) {
	echo "ce travail est nul";
}else if ($_GET["note"] == 6 && $_GET["note"] ==7 && $_GET["note"] ==8 OR $note==9) {
	echo "ce travail est nest pas terrible";
} else {
 echo "bon travail";
}



/*

Crée un petit formulaire qui réagit à la note de l'étudiant.
Si la note est égale à 1, 2 ou 3, affiche "Ce travail est nul."
Si la note est égale à 6, 7, 8 ou 9, affiche "Ce travail n'est pas terrible."
Si la note est égale à 10, affiche "Tout juste!"
Si la note est égale à 11, 12, 13 ou 14, affiche "C'est pas mal."
Si la note est 15, 16, 17, ou 18, affiche "Bravo!".

FIN du test
Si la note est 19 ou 20, affiche "Police! Arrêtez ce tricheur!".


*/
?>
