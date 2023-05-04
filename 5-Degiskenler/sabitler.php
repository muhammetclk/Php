<?php
/*
Sabitler
Bir sabit define() işlevi kullanılarak tanımlanabilir. Bir sabit tanımlandıktan sonra asla değiştirilemez ve tanımsız yapılamaz.

Harf ve alt çizgi ile başlar.
Obje hariç tüm veri tiplerini tutabilir.
Sayı ile başlayamaz.
Türkçe karekter içerebilir.
Geleneksel olarak, sabit isimleri daima büyük harfle yazılır.*/

define("ISIM","Ahmet");//degisken adı ve degeri seklinde tutulur.
define("_ISIM","mehmet");//sabit degerleri degistitilemez
echo ISIM;
echo _ISIM;

