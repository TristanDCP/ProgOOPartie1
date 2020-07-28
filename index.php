<?php
require_once('Character.php');
require_once('Hero.php');
require_once('Orc.php');
$hero = new Hero(2000,0, 'Shear Trigger', 250, 'Crystal Mail', 600);
$orc = new Orc(500,0);
$increaseValue = +30;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warcraft</title>
</head>
<body>
<?php
echo 'Le héros possède  ' .$hero->getHealth(). ' point de vie de base <br>';?>
<?php $orc->randomOrcAttackDamage() ?>
<p>L'orc attaque le héros pour <?= $orc->getDamage()?> dégats</p>
<?php $hero->attacked($orc->getDamage())?>
<p>Le héros a maintenant <?= $hero->getHealth()  ?></p>
</body>
</html>