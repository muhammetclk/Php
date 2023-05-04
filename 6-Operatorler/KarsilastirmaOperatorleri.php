<?php


/*
$a = 3;
$b = 4;
echo $a == $b;    esittir              Sonuç: false
echo $a === $b;   aynıdır              Sonuç: false
echo $a != $b;    esit degildir        Sonuç: true
echo $a !== $b;   farklıdır            Sonuç: true
echo $a < $b;     kucuktur             Sonuç: true
echo $a > $b;     buyuktur             Sonuç: false
echo $a <= $b;    kucuk esittir        Sonuç: true
echo $a >= $b;    buyuk esittir        Sonuç: false
echo $a <=> $b;    mekik               Sonuç: -1 (a ile b esitse 0 , a buyukse 1, b byukse -1 degerini alıyor.)
*/
$a=2;
$b='2';
 var_dump($a);//bununla bir degiskenin tipini ve degerini alıyoruz
 var_dump($a===$b);// == bu ıkısını esit olarak goruyor === esittir ile aynı olmadıgını goruyor.
$sayi1=2;
$sayi2=2;

var_dump($sayi1==$sayi2);