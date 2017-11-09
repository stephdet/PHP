<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title>tableau</title>
</head>
<body>
<?php

$web_development = array (
   'frontend'=> array(),
    'backend'=> array(),
   );


$web_development['frontend'][] = 'xhtml';
echo '<pre>';
print_r($web_development);
echo '</pre>';


$web_development['backend'][] = 'Ruby on Rails';
echo '<pre>';
print_r($web_development);
echo '</pre>';

//chercher une valeur et replace
//

$index = array_search("xhtml", $web_development["frontend"]);
$web_development['frontend']['$index'] = 'html';
print_r($web_development);


//chercher une valeur et delete
//
$index = array_search("Flash", $web_development["frontend"]);

array_splice($web_development["frontend"], $index, 1);

print_r($web_development);




/*$moi =array (
   'naissance' => 1969,
   'prenom' => 'Stephane',
   	'sport' => 'aime_le_tennis',
   	'hobbie' => array('tennis','badminton','hockey','volleyball'),
	);


$papa =array (
   'naissance' => 1939,
   'prenom' => 'Jean-Marie',
   	'sport' => 'lamarche',
   	'hobbie' => array('marche','golf','voile','echec'),
	);

echo '<pre>';
print_r($papa);
echo '</pre>';
*/








?>

	
</body>
</html>