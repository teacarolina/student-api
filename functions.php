<?php 
//övningsuppgifter
//1 - Skriv en funktion som skriver ut en rektangels area. Låt den ta två sidor som argument. 
function areaRek($x, $y) {
    $area = ($x*$y);
    return $area;
}

echo "The area of the rektangel is " . areaRek(5,5); 

//2 - Skriv en funktion som retunerar dubbla argumentets värde, dvs. om du skickar in 4 till funktionen
//ska den retunera 8
function doubleUp($a) {
    $multi = ($a*2); 
    return $multi;
}

echo "<br> Double the value is " . doubleUp(4);

//3 - Skriv en funktion som tar ett startvärde och ett slutvärde som argument. Slutvärdet ska ha ett 
//default-värde. Funktionen ska med hjälp av en loop anropa din andra funktion en gång för varje värde. 
function myFunc($startValue, $endValue = 10) {
    for($i = $startValue; $i < $endValue; $i++) {
        echo "<br>" . doubleUp($i);
    }
}

myFunc(2);

//4 - Skriv en funktion som konverterar grader i F till C
//(För att omvandla Fahrenheit till Celsius: Dra ifrån 32, multiplicera med 5 och dividera med 9)
function toCelcius($far) {
    $cel = ($far-32)*5/9;
    return $cel; 
}

echo "<br> The degrees in celcius is " . toCelcius(70);

//5 - Skriv en funktion som tar två värden och skriver ut det största värdet 
function twoValues($valueOne, $valueTwo) {
    if($valueOne > $valueTwo) {
        echo "<br>" . $valueOne . " is the highest value";
    } else {
        echo "<br>" . $valueTwo . " is the highest value"; 
    }
}

twoValues(1, 5);

//6 - Research-uppgift: Skriv en rekursiv funktion som räknar ut fakulteten för ett heltal
function myRecursiveFunction($x) {
    echo "<br>", $x; 
    if ($x < 20) {
    return myRecursiveFunction($x +1); 
    }
}
myRecursiveFunction(1); 
?>