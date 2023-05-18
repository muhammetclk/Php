<?php
/*
shuffle();
Bir diziyi karıştırır.
array_combine();
Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
array_count_values();
Bir dizideki tüm değerleri sayar.
array_flip();
Bir dizideki anahtarlarla değerleri yer değiştirir.
array_key_exists();
Belirtilen anahtar veya indis dizide var mı diye bakar.
array_map();
Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.
array_filter();
Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
array_merge();
Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
array_rand();
Bir diziden belli sayıda rasgele anahtar döndürür.
array_reverse();
Diziyi tersine sıralayıp döndürür.
array_search();
Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.
*/ 
echo '<pre>';
$sayilar=range(1,20);//range ile belirtilen aralikte bir dizi olusturabiliriz.artis miktarinida verebiliriz.
print_r($sayilar);

shuffle($sayilar);
print_r($sayilar);//gercek hayatta sayisal lotoda sayilari makineye yaptirma gibi rastggele sayilar uretebilir.

$meyve=['elma','armut','muz'];//ayni sayida olmali
$renkler=['kirmizi','yesil','sari'];
$meyverenk=array_combine($meyve,$renkler);
print_r($meyverenk);

$meyve=['elma','armut','muz','elma','armut','muz','elma','armut','muz','elma','armut','muz'];
$countmeyve=array_count_values($meyve);
print_r($countmeyve);

$renkmeyve=array_flip($meyverenk);
print_r($renkmeyve);

$varmi=array_key_exists('yesil',$renkmeyve);//3 anahtarina sahip deger varmi diye kontrol ettik false oldu.(yesil yazsak true donerdi)
var_dump($varmi);

$sayilar2=range(1,10);
$dizi=array_map(function($e){
    return $e+2;

},$sayilar2);//burdaki e sayilar2 dizindeki herbir elemana denk geliyor.e uzerindeki islemler degerleri etkiler.
print_r($dizi);


$teksayilar=array_filter($sayilar2,function($e){//anonim fonk yerine disarda fonk tanımlayip islemi ordada yaptirabiliriz.                    'fonkadıgelir'
return $e%2==1 ?$e:false;
});//tek olan sayilari alalaim.
print_r($teksayilar);

$birlesikdizi=array_merge($sayilar2,$teksayilar);
print_r($birlesikdizi);

$randanahtar=array_rand($birlesikdizi);
var_dump($randanahtar);

$terssiralidizi=array_reverse($birlesikdizi);
print_r($terssiralidizi);

$searchanahtar=array_search('elma',$meyve);
print_r($searchanahtar);//anhatari 0;