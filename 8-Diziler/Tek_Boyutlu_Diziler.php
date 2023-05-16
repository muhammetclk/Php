<?php
/*
Array'leri iki şekilde tanımlayabiliriz.

    $a = array('elma','armut')
veya

    $a = ['elma','armut']
*/

$isimler=array('ali','veli','ahmet','mehmet','can');
$isimler=['ali','veli','ahmet','mehmet','can'];
echo gettype($isimler);
echo $isimler[0];//index numarasını kullanarak degere ulsatık.
echo '<pre>';
print_r($isimler);//bununla tüm degerleri ve index numaralarını ekrana basıyoruz.

$isimler3=[//veri tipleri farkli olabilir.
'isim1'=>5,
'isim2'=>'Mehmet'
];//hem index ismini degistirdik hemde manuel olarak deger verdik.
print_r($isimler3);
echo $isimler3['isim2'];
echo '<br>';
var_dump($isimler3);//var_dump ile daha detaylı bilgiye ulasiyoruz.

$kisi=['Ad'=>'Ahmet',
'soyad'=>'abc',
'yas'=>15];//bu sekilde farkli tipteki verileride tutabiliriz.
var_dump($kisi);


