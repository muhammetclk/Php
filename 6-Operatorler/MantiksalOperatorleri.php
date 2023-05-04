<?php
/*
&& ve
|| veya
! degilse
*/
$a = 3;
$b = 2;

echo ($a > $b) && ($a != $b); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo ($a > $b) || ($a == $b); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.
$sonuc=($a>$b)||($a ==$b);
var_dump($sonuc);
echo $sonuc;