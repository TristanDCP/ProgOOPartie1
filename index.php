<?php
require_once('Character.php');
require_once('Hero.php');

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
$personnage = new Hero(500,777, '光の尻尾', 1200, 'Boubouclier', 250);
$personnage->attacked(300);
echo 'Tu as maintenant : ' .$personnage->getHealth(). ' point de vie';
?>

</body>
</html>