<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>

<table>

<?php
        $fichier = 'classe-simploniens.xml';
$xml = simplexml_load_file($fichier);


foreach($xml as $personne)
{

	echo $personne->nom.'  '.$personne->prenom.'  ' .$personne->date_naissance. '</br>';


}


?>

</table>

</body>
</html>


