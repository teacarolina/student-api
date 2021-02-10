<?php
//Övning 3
//Skapa spelet Nim. En hög har från början 21 pinnar. Två spelare turas om att ta 1,2,3 pinnar från högen.
//Den som tar den sista pinnen har förlorat. Håll reda på hur många pinnar som finns kvar i högen,
//vad spelarna heter och vems tur det är.

$numberofsticks = 21; 
$numberofsticks = $numberofsticks - $_POST['sticks'];

if(!empty($_POST[]))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nim</title>
</head>
<body>
    <h1>The game: Nim</h1>
    <form action="nim.php" method="POST">
    <label for="playerone">Select name of players</label><br>
    <input type="text" name="playerone" placeholder="Player 1">
    <input type="text" name="playertwo" placeholder="Player 2">
    <input type="submit" name="submitplayers"><br>
    </form>
    <h2>Let's play</h2>
    <h3>Number of sticks left: <?=$numberofsticks?></h3>
    <h4>It's X's turn to draw</h4>
    <form action="nim.php" method="POST">
    <label for="sticks">Select number of sticks</label><br>
    <input type="number" name="sticks" min="1" max="3">
    <input type="submit">
    </form>
</body>
</html>