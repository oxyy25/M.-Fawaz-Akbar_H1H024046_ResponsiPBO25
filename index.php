<?php
session_start();
require_once "class/Fightingpokemon.php";
require_once "class/TrainingHistory.php";

$poke = new FightingPokemon("Machop", "Fighting", 1 , 70,80,50,35,"Guts and No guard");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PokéCare - home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>PokéCare - Home</h1>
<div class="container">
    <img class ="gambar" src="machop.png" alt="gambar-machop"   >
    <div class="card">
        <h2><?= $poke->getName(); ?></h2>
        <p><b>Type:</b> <?= $poke->getType(); ?></p>
        <p><b>Level :</b> <?= $poke->getLevel(); ?></p>
        <p><b>HP :</b> <?= $poke->getHP(); ?></p>
        <p><b> Attack : </b> <?= $poke->getAttack(); ?></p>
        <p><b> Defense : </b> <?= $poke->getDefense(); ?></p>
        <p><b>Speed : </b> <?= $poke->getSpeed(); ?></p>
        <p><b>Jurus Spesial:</b> <?= $poke->getSpecialMove(); ?></p>
    </div>
    <div class = "button-grup">
    <a class="btn" href="Training.php">Start Training</a>
    <a class="btn" href="History.php">History Training</a>
    </div>
</div>
    
</body>
</html>


