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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Warcraft</title>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <div class="stats text-center border border-black text-white textcontainer">
                <?php echo '<span class="namefocus">le héros </span> possède  ' .$hero->getHealth(). ' point de vie de base <br>';?>
                <?php echo 'L\'orc possède  ' .$orc->getHealth(). ' point de vie de base <br>';?>
            </div>
        </div>
    </div>
    <?php 
while($hero->getHealth() > 0){
     $orc->randomOrcAttackDamage(); ?>
    <div class="container">
        <div class="text-center border border-black text-white textcontainer">
            <p><span class="namefocus">L'orc </span>attaque <span class="namefocus">le héros </span> avec sa massue pour <span class="damage"><?= $orc->getDamage() - $hero->getShieldValue()?> dégats</span></p>
            <?php $hero->attacked($orc->getDamage())?>
            <p><span class="namefocus">le héros </span> ne perd que <span class="damage"><?= $orc->getDamage() - $hero->getShieldValue()?></span> point de vie grâce à son <span class="protection"><?= $hero->getShield()?></span> ! Il a maintenant <span class="health"><?= $hero->getHealth()?></span>point de vie</p>
            <?php $hero->rageIncrease($increaseValue)?>
            <p><span class="namefocus">le héros </span> a maintenant <span class="rage"><?= $hero->getRage()?> point de rage</span></p>
            <?php if($hero->getRage() > 100){
        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage())?>
            <p><span class="namefocus">le héros </span> attaque <span class="namefocus">L'orc </span> avec sa <?= $hero->getWeapon() ?> pour <span class="damage"><?= $hero->getWeaponDamage() ?> points de </span></p>
            <p><span class="namefocus">L'orc </span> possède maintenant <span class="health"><?= $orc->getHealth(- $hero->getWeaponDamage()) ?> points de vie</span></p>
            <?php $hero->setRage(0)?>
            <p><span class="namefocus">le héros </span> possède maintenant <span class="rage"> <?= $hero->getRage() ?> points de rage </span></p>
            <?php
         if($orc->getHealth() <= 0){?>
            <p> <?='L\'orc est décédé de mort subite'; ?></p>
            <p> <?= '<span class="namefocus">le héros </span> a gagné !' ?></p>
            <?php 
         break;
         }
        ?>
            <?php
} 
?>
            <?php if($hero->getHealth() <= 0){
        echo '<span class="namefocus">le héros </span> est mort.';
    }?>
        </div>
    </div>
    </div>
    <?php

}
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>