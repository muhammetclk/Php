<?php

$topla=function(){//isimsiz fonksiyon
    return 2+2;
};//; ile kapanmak zorunda

echo $topla();
$topla=function($s1,$s2){
    return $s1+$s2;
};

echo $topla(4,5);

$dizi=[1,2,3,4,5];

$dizi=array_map(function($e){//array_map ile isimsiz fonk verdik dizi verdik ve fonk icinde elemanları 2 ile carptik.
   return $e*2;
},$dizi);
print_r($dizi);
echo '<br>';
$islem=[//bir dizi icinde anonim fonksiyon tuttuk.
    'topla'=>function($s1,$s2){return $s1+$s2;},
    'carp'=>function($s1,$s2){return $s1*$s2;},
    'bol'=>function($s1,$s2){return $s1/$s2;},
    'cikar'=>function($s1,$s2){return $s1-$s2;}
];

echo $islem['topla'](4,5);
echo '<br>';
echo $islem['carp'](4,5);
echo '<br>';
echo $islem['bol'](10,5);
echo '<br>';
echo $islem['cikar'](4,5);


