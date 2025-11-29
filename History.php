<?php
session_start();
require_once "class/Fightingpokemon.php";
require_once "class/TrainingHistory.php";
$history = TrainingHistory::getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>History training</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
     <h1 class="header">History Training Pokémon</h1>
<div class="container-history">
   
    <?php if (empty($history)): ?>
        <p>no history training.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>type</th>
                <th>Intensity</th>
                <th>Level before → after</th>
                <th>HP before → after</th>
                <th>Attack before → after</th>
                <th>Defense before → after</th>
                <th>Speed before → after</th>
                <th>time</th>
            </tr>
            <?php foreach ($history as $r): ?>
            <tr>
                <td><?= $r['jenis']; ?></td>
                <td><?= $r['intensity']; ?></td>
                <td><?= $r['before']['level'] . " → " . $r['after']['level']; ?></td>
                <td><?= $r['before']['hp'] . " → " . $r['after']['hp']; ?></td>
                <td><?= $r['before']['attack'] . " → " . $r['after']['attack']; ?></td>
                <td><?= $r['before']['defense'] . " → " . $r['after']['defense']; ?></td>
                <td><?= $r['before']['speed'] . " → " . $r['after']['speed']; ?></td>
                <td><?= $r['time']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
   <a class="btn" href="index.php">home</a>
</div>
     
</body>
</html>