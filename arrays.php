<?php 
//Övningsuppgifter
//1. Vi ska börja med att skriva ut olika värden i en array. Om vi har en array som denna:
$your_array = [23, 45, 54, 12, 77];
//● Skriv ut det första och sista värdet (23 & 77) i denna array med hjälp av echo
//● Vilka index ligger värdena på?
echo $your_array[0] . "<br>" . $your_array[4];

//2. Om vi redan har en array som den ovan kan vi även direkt ändra på ett visst värde på samma sätt som när 
//vi tilldelar en variabel ett värde med =.
//● Ändra sista värdet i $your_array genom att tilldela det nya värdet 1.
//● echoa arrayen efter att du har lagrat det nya värdet för att se att värdet verkligen har ändrats.
$your_array = [23, 45, 54, 12, 77];
$your_array[4] = 1;
echo "<br>" . $your_array[4];

//3. För att komma åt alla värden i en array vill vi ju inte skriva in varenda index, speciellt inte om vi 
//inte vet hur lång arrayen är, alltså hur många värden som finns inuti den. Vi kan inte bara skriva ut hela
//innehållet i arrayen med echo $my_array heller, det kommer bara att skriva ut hela arrayen och inte alla 
//värden för sig. Tur att loopar finns.
//Du har denna array:
$best_array = [1, 2, 3, 4, 5];
//Nu ska du loopa igenom arrayen och skriva ut varje värde i arrayen. Tänk på att längden av en array kan man
//ta ut med count($best_array) samt att varje värde i en array har ett index som man kommer åt värdet ifrån.
//Indexet är då detsamma som det nuvarande värdet på räknaren i loopen.
//* count @ php.net
for($i = 0; $i < count($best_array); $i++) {
    echo "<br>" . $best_array[$i]; 
}; 

//4. Använd samma array som tidigare. Nu ska du dock loopa igenom arrayen och multiplicera varje värde i
//arrayen med summan av det föregående värdet. D.v.s, 1 * 2 * 3… etc.
//Spara värdet i en $sum och echoa sedan ut denna variabel efter att loopen har körts klart
$best_array = [1, 2, 3, 4, 5];
$sum = 0; 
for($i = 0; $i < count($best_array); $i++) {
    $sum += $best_array[$i]*2; 
}
echo "<br>" . $sum; 


//5. Du ska utgå från följande array:
$ok_array = ["fine", "FINE", "good", "what is this stuff?", "sweet", "i don't even live here"];
//Du ska loopa igenom arrayen och echoa dess värden. Dock ska din loop inte skriva ut strängar som är längre
//än 5 tecken. "fine", "FINE", "good" och "sweet" ska alltså skrivas ut men inte "whatisthisstuff?" och 
//"i don't even live here".
//För att komma åt hur lång en sträng är kan man använda strlen(), en inbyggd funktion: strlen() @ php.net 
for($i = 0; $i < count($ok_array); $i++) {
    if(strlen($ok_array[$i]) <= 5) {
        echo "<br>" . $ok_array[$i];
    }
} 

//6. 
$worst_array_yet = ["string", true, 42, "another string", 54, true, 1];
//För att få ut vilket värde en variabel är kan vi använda is_string() t.e.x. som returnerar true eller 
//false baserat på om värdet är en sträng. Detta kan vi sedan använda i en if-sats.
//Du ska loopa igenom arrayen $worst_array_yet och ska sedan echoa ut varje sträng som förekommer i
//arrayen. Men om värdet i arrayen är något annat ska det värdet läggas till i $sum; för att sedan efter 
//att loopen är klar echoa ut.
$sum = 0; 
for($i = 0; $i < count($worst_array_yet); $i++) {
    if(is_string($worst_array_yet[$i]) == true) {
        echo "<br>" . $worst_array_yet[$i]; 
    }
    elseif(is_numeric($worst_array_yet[$i]) == true) {
        $sum += $worst_array_yet[$i];
    }
}
echo "<br>" . $sum;
//om det är en string så kommer det skriva ut 1 annars ingenting, ger ett true/false value 
//is_numeric gör liknande som string fast den kollar om det är ett nummer eller inte
?>