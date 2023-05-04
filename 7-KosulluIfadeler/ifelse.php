<?php

$kosul=true;
if($kosul){
    echo "if icine girdi.";
}
else{
    echo "if icine girmedi.";
}
$a=5;
$b=10;
if($a>$b){
    echo $a.' Büyüktür'.$b;
}
else{
echo $b.' buyuktur'.$a;
}
//ternary kullanımı
echo $a=5 ? 'a esittir 5':'a esit degildir 5'; 

echo $b=6 ?"b esittir 6":"a esit degildir 6";