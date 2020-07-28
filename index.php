<?php
require_once('Character.php');
require_once('Hero.php');
require_once('Orc.php');
$hero = new Hero(2000,0, 'Shear Trigger', 250, 'Crystal Mail', 600);
$ennemi = new Orc(500,0);
$orcAttackValue = $ennemi->randomOrcAttackDamage();
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

echo 'Le héros possède  ' .$hero->getHealth(). ' point de vie de base <br>';
echo 'L\'Orc possède  ' .$ennemi->getDamage(). ' points d\'attaque';

while($hero->attacked($ennemi->getDamage())){
    $hero->setHealth($newHealth);
    $hero->rageIncrease($increaseValue);
    echo 'Tu as maintenant : ' .$hero->getHealth(). ' point de vie <br>';
}
?>

</body>
</html>