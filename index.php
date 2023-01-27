<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();
$perso->setNom = "John";
echo $perso->setNom;

echo"<br><br>";



$perso2 = new personnage();
$perso2->setNom = "Robert";
echo $perso2->setNom;



$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
