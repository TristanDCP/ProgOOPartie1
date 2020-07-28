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

<?php echo 'Le héros possède  ' .$hero->getHealth(). ' point de vie de base <br>';?>
<?php echo 'L\'orc possède  ' .$orc->getHealth(). ' point de vie de base <br>';?>
<?php 
while($hero->getHealth() > 0){
     $orc->randomOrcAttackDamage(); ?>
     <?= '<hr>'?>
    <p>L'orc attaque le héros pour <?= $orc->getDamage() - $hero->getShieldValue()?> dégats</p>
    <?php $hero->attacked($orc->getDamage())?>
    <p>Le héros a maintenant <?= $hero->getHealth()?> point de vie</p>
    <?php $hero->rageIncrease($increaseValue)?>
    <p>Le héros a maintenant <?= $hero->getRage()?> point de rage</p>
    <?php if($hero->getRage() > 100){
        $orc->setHealth($orc->getHealth() - $hero->getWeaponDamage())?>
        <p>Le héros attaque l'orc pour  <?= $hero->getWeaponDamage() ?> points de dégats</p>
        <p>L'orc possède maintenant  <?= $orc->getHealth(- $hero->getWeaponDamage()) ?> points de vie</p>
        <?php $hero->setRage(0)?>
        <p>Le héros possède maintenant  <?= $hero->getRage() ?> points de rage</p>
        <?php
         if($orc->getHealth() <= 0){?>
         <p> <?='L\'orc est décédé de mort subite'; ?></p>
         <p> <?= 'Le héros a gagné !' ?></p>
         <?php 
         break;
         }
        ?>
    <?php
} 
?>
    <?php if($hero->getHealth() <= 0){
        echo 'Le héros est mort.';
    }?>
<?php
}
?>


</body>
</html>