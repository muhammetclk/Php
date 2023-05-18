<?php
/*
print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.
var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
implode();
Dizi elemanlarını birleştirip bir dizge elde eder.
count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
is_array();
Değişkenin bir dizi içerip içermediğine bakar
*/
echo '<pre>';
$array=[1,2,3,4,5,6,7,8,9];

print_r($array);
var_dump($array);
$dizge=implode($seperator="=",$array);//seperator ayracını belirtiyor.
print_r($dizge);
$dizge=implode($seperator="=asd=",$array);
echo '<br>';
print_r($dizge);

echo '<br>';
$newarr=explode($seperator="=asd=",$dizge);//=asd= den patlatip yeni bir dizi olusturucak
print_r($newarr);

echo count($newarr);//for icerisinde kullanabiliriz.
echo '<br>';
echo is_array($newarr);//1 true anlaminda
