<?php
/* 
Veri Türleri
Bir ifadenin değerinin ve türünün ne olduğuna bakmak için var_dump() işlevini kullanabilirsiniz. Hata ayıklama amacıyla bir değişkenin türünü öğrenmek için gettype() işlevini kullanın.

String "Şahin Ersever" 'Test' '3' "2"
Integer 100 255
Float(Double) 2.5
Boolean(true, false)
Array(Dizi) ['a','b'], array(1,2)
Object(Nesne)
NULL */

$a="Mehmet";
$b=5;
$c=true;
$d=5.2;
$e=[];
echo $a;
echo "<br>";
echo gettype($a); //bu sekilde verinin tipini ogrenebiliriz
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype($d);
echo "<br>";
echo gettype($e);
echo "<br>";
var_dump($a);
echo "<br>";
$sayi=6;

echo gettype($sayi);