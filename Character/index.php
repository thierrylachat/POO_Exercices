<?php
require_once 'Character.php';
require_once 'Orc.php';
require_once 'Stuff.php';

$stuff = new Stuff('casque lourd', 'armure kevlar','Fennec');
$character = new Character(100,100,$stuff,'');
$orc = new Orc(3,100,56,8);

// Pour changer la valeur de health car le joueur a gagné une vie.
$character -> setHealth(3);
$orc->setArmor(1000);

?>

<!-- Pour accéder à une propriété privée, il faut change l'accessibilité -->
<p><?= $character -> getHealth(); ?></p>
<p><?= $character -> getStuff()->head; ?></p>

<!-- Utilisation du marteau par le joueur. -->
<p><?= $orc -> useHammer(); ?></p>

<p><?= $character -> getArmor(); ?></p>

<p><?= $stuff-> weapon; ?></p>
<p><?= $stuff-> head; ?></p>
<p><?= $stuff-> body; ?></p>