<?php
/*Birleştirme Operatörü
Birleştirme operatörü nokta(.) ile gösterilir. İki ifadenin arasında yer alarak sağındaki ifade ile solundaki ifadeleri birbirine birleş<tirir class=""></tirir>*/

$isim = 'Ahmet';
$soyisim = 'Mehmet';
$yas = 27;
echo 'Merhaba, benim ismim '. $isim.' soyismim '.$soyisim.'. Şuan '.$yas.' yaşımdayım.';
// Ekrana "Merhaba, benim ismim Ahmet soyismim Mehmet. Şuan 27 yaşımdayım." sonucunu yazar.

$isim = 'Muhammet';
$soyisim = 'Celik';
echo $isim.' ' . $soyisim;
echo '<br>';
$modul="<div>";
$modul.='<p>Lorem ipsum dolor sit amet.</p>';
$modul.='</div>';
echo $modul;