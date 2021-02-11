<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nim</title>
</head>
<body>
<?php
//Övning 3
//Skapa spelet Nim. En hög har från början 21 pinnar. Två spelare turas om att ta 1,2,3 pinnar från högen.
//Den som tar den sista pinnen har förlorat. Håll reda på hur många pinnar som finns kvar i högen,
//vad spelarna heter och vems tur det är.

$numberOfSticks = 21; 

$playerTurn = 1;


if(!empty($_POST['sumSticks'])) {
    $numberOfSticks = $_POST['sumSticks'];
}

if(!empty($_POST['turn'])) {
    if($_POST['turn'] == 1) {
        $playerTurn = 2; 
    } else {
        $playerTurn = 1; 
    }
}

$numberOfSticks = $numberOfSticks - $_POST['sticks'];

if($_POST['sumSticks'] <= 1) {
    if($_POST['turn'] == 1) {
        echo "Player 1 lost the game!";
    } else {
        echo "Player 2 lost the game!";
    }
}
?>
    <h1>The game: Nim</h1>

    <h2>Let's play</h2>
    <h3>Number of sticks left: <?=$numberOfSticks?></h3>
    <h4>It's <?=$playerTurn?>'s turn to draw</h4>

    <form method="POST" action="nim.php" >
    <label for="sticks">Select number of sticks</label><br>
    <input type="number" name="sticks" min="1" max="3">
    <input type="hidden" name="sumSticks" value="<?php echo $numberOfSticks; ?>">
    <input type="hidden" name="turn" value="<?php echo $playerTurn; ?>">
    <input type="submit">
    </form>
</body>
</html>