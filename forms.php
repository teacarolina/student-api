<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<!--Övning 1 
Skapa en sida med ett formulär med följande komponenter: textruta, textarea, select, radiobutton, checkbox,
colorpicker. Posta sidan till en ny sida och skriv där ut alla nycklar och värden som användaren 
har skickat.-->
<h2>Övning 1</h2>
<form method="POST" action="formsPageTwo.php">
<input type="text" name="text"></br>
<textarea name="textarea" id="" cols="30" rows="10"></textarea></br>
<input type="select" name="select"></br>
<input type="radio" name="radio"></br>
<input type="checkbox" name="checkbox"></br>
<input type="color" name="color"></br>
<input type="submit" name="submit">
</form>



<?php 
//Övning 2
//Strängfunktionerna i PHP
//Skapa ett formulär som låter användare använda följande funktioner: 
//htmlentities, explode, crypt, str_word_count, strip_tags, strlen
print_r(htmlentities($_POST['htmlentities'],ENT_COMPAT));
print_r(explode(',', $_POST['explode']));
print_r(crypt($_POST['crypt'], '$1$somethin$'));
print_r(str_word_count($_POST['str_word_count']));
print_r(strip_tags($_POST['strip_tags']));
print_r(strlen($_POST['strlen']));

?>

<h2>Övning 2</h2>
<h3>Use different string functions in PHP</h3>
<form action="forms.php" method="POST">
<label for="htmlentitites">htmlentities</label>
<input type="text" name="htmlentities"></br>

<label for="explode">Explode</label>
<input type="text" name="explode"></br>

<label for="crypt">Crypt</label>
<input type="text" name="crypt"></br>

<label for="str_word_count">str_word_count</label>
<input type="text" name="str_word_count"></br>

<label for="strip_tags">strip_tags</label>
<input type="text" name="strip_tags"></br>

<label for="strlen">strlen</label>
<input type="text" name="strlen"></br>
<input type="submit" name="submit">
</form>
</body>
</html>