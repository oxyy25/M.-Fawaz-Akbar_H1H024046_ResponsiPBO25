<?php
session_start();
require_once "class/Fightingpokemon.php";
require_once "class/TrainingHistory.php";

$poke = new FightingPokemon("Machop", "Fighting", 1, 70,80,50,35,"Guts and No guard");
$output = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jenis = $_POST['jenis'];
    $intensity = intval($_POST['intensity']);

    [$before, $after] = $poke->train($jenis, $intensity);
    TrainingHistory::add($jenis, $intensity, $before, $after);

    $output = "<div class='output'>"
            . "<p>Level: {$before['level']} → {$after['level']}</p>"
            . "<p>HP: {$before['hp']} → {$after['hp']}</p>"
            . "<p>Attack : {$before ['attack']} → {$after['attack']}</p>"
            . "<p>Defense : {$before ['defense']} → {$after['defense']}</p>"
            . "<p>Speed : {$before ['speed']} → {$after['speed']}</p>"
            . "<p>Jurus Spesial: {$poke->specialMove()}</p>"
            . "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Pokémon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Latihan Pokémon</h1>
<div class="container-latihan">
    <form method="POST">
        <label>Jenis Latihan:</label>
        <select name="jenis" required>
            <option value="Attack">Attack</option>
            <option value="Defense">Defense</option>
            <option value="Speed">Speed</option>
        </select>

        <label>Intensitas (angka):</label>
        <input type="number" name="intensity" required>

        <button class="btn" type="submit">Training!</button>
    </form>

    <?= $output; ?>

    <a class="btn" href="index.php">Home</a>
    <a class="btn" href="History.php">History</a>
</div>
</body>
</html>