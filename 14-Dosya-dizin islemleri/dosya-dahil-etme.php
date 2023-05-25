<?php

//test2.txt dosyasini dahil ettik.uzantı fark etmeden ekleyebilriz.
require('test2.txt');
require('dizin-islemleri.php');//burda cagirarak icindeki islemleri gerceklesitrebiliriz.

//olmayan dosyayi eklemeye calisirsak fatal error verir.
//include() ile eklemeye calisrsak warning hata verir.buda dosya dahil etme komutu
//warning ile fatal ın farkı.warningde hatadan sonraki kodlar calisyorken fatalda calismiyor.

//bu dosyalari bu komutlari kullanarak birden fazla kez getirebiliyoruz fakat bir kere getirmek istiyorsak
//include_once
//require_once  kullanabiliriz.

//bu komutlar kullanilirken uzantinin php olmasi gerekmiyor.
//icinde php komutlari varsa php ye gore calisacaktir.
//başka bir dosyadan return de yapabilriz.
//orn a.php dosyası ıcınde bir dizi olsun onu
$dizi=include 'a.php'; //seklinde alip print_r ile burda  bastirabilri.z

print_r($dizi);