<?php
//Övning 1 
//Skapa en sida med ett formulär med följande komponenter: textruta, textarea, select, radiobutton, checkbox,
//colorpicker. Posta sidan till en ny sida och skriv där ut alla nycklar och värden som användaren har skickat.
//, 'select', 'radio', 'checkbox', 'color']);

print_r($_POST['text']);
print_r($_POST['textarea']);
print_r($_POST['select']);
print_r($_POST['radio']);
print_r($_POST['checkbox']);
print_r($_POST['color']);
?>