<?php
$a = 1;
$b = -5;
$c = 6;

$delta = $b**2 -(4*$a*$c);
    // Zmienna a1 b-5 c6 oblicz delte więkrza od zera dwa miejsca zerowe jeżeli zero jedno mniej to brak miejsc zerowych 
echo $delta;

if($delta < 0){
    echo "Nie ma miejsc zerowych";
}else if($delta == 0){
    $x= -$b/(2*$a);
    echo "Jedno miejsce zerowe: x = $x";
}else{
    $x1 = (-$b - sqrt($delta))/(2*$a);
    $x2 = (-$b + sqrt($delta))/(2*$a);
    echo "x1 = $x1 <br>";
    echo "x2 = $x2 <br>";
}