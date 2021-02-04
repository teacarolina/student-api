<?php
//övningsuppgifter
//1. Använd loopen från innan, fast istället för att skriva ut varje siffra: Lägg ihop sifforna i en ny 
//variabel samt skriv ut den variabeln med echo efter loopen är slut. 
//Du ska alltså lägga ihop alla värden till en variabel $sum.
$sum = 0; 
for($i = 0; $i < 10; $i = $i + 1){
    $sum += $i; 
      } 
echo "The sum of the loop is " . $sum; 

//2. Skapa en for-loop som skriver ut varannat tal. Loopen ska gå från 0 till 10. Använd loopen från ovan.
for($i = 0; $i < 10; $i = $i + 2){
    echo "<br>" . $i; 
} 

//3. Skriv en for-loop som skriver ut värden åt andra hållet, så att siffrorna skrivs ut 
//10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0
for($i = 10; $i >= 0; $i = $i - 1){
    echo "<br>" . $i; 
} 

//4. Skriv en for-loop med ett condition(if-sats) som gör så att endast siffror som är jämna tal skrivs ut 
//till sidan.
for($i = 0; $i < 10; $i = $i + 1){
    if($i % 2 == 0) {
        echo "<br>" . $i;
    }
} 

//5. Skriv en while-loop som gör samma som övning 4.
$i = 0;
while ($i < 10) {  
    if($i % 2 == 0) {
        echo "<br>" . $i;
    }
    $i++;
}

//6. Vad är skillnaden på de här två scripten? Vad kommer de båda skriva ut och varför?
$num = 0;
while($num < 0){
echo "<br> Ingenting kommer att skrivas ut" . $num;
$num++;
}
//Ingenting kommer att skrivas ut eftersom att vi har deklarerat att $num skrivs ut om det är mindre än 0

$num = 0;
do{
echo "<br> Noll kommer att skrivas ut: " . $num;
$num++;
}while($num < 0);
//Kommer att skriva ut 0, och sen kommer loopen att ta slut. Skillnaden är att vi deklarerar efteråt att 
//$num är mindre än 0 så kommer hinna skriva ut 0 en gång innan den stoppar

//7. Mina får förökar sig snabbt och jag behöver ett php-script som kan räkna ut hur många de kommer att vara 
//inom ett år. Varje månad kommer fåren att multipliceras med 4.
//Använd dessa tre variabler nedanför:
$numberOfSheep = 4;
$monthNumber = 1;
$monthsToPrint = 12;
//För att sedan skriva ut detta för varje månad:
//Output:
//There will be 16 sheep after 1 month(s)!
//There will be 64 sheep after 2 month(s)!
    for($i = $monthNumber; $i < $monthsToPrint; $i++) {
        $quantity = ($numberOfSheep*$i);
        echo "<br> There will be $quantity sheep after $i month(s)!";
    }
//8. Jag vill ha ett program som mjauar!
//Programmet fungerar som så att den frågar användaren efter hur många mjau den vill ha. Om användaren skriver 
//“3”, ska programmet svara med “mjau mjau mjau”. Om användaren skriver “4” ska programmet svara med 
//“mjau mjau mjau mjau”. Om användaren skriver “0” ska programmet “avslutas”, d.v.s. inte ta in mer input.
//Programmet ska fungera som följande:
//● Läs in ett tal från en variabel.
//● Om talet är inte är 0
//a. Skriv lika många “mjau” som talet, i rad
//● Annars skriv ut “😾” eller något annat.
echo "<br>";
function testing($number) {
$whiskas = "mjau ";
if($number != 0) {
    for($i = 0; $i < $number; $i++)
    echo "$whiskas ";
} else {
    echo "<br> 😿";
}
}
testing(2);
?>