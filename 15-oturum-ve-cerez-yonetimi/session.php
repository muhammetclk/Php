<?php

session_start();//oturumu baslatir ve tarayici kapanana kadar bizim oturum verilerimiz session icinde saklanir.

//sessiona deger atamasi global tanimli degiskenle oluyor.anhatar ile degerini atiyoruz.
$_SESSION['isim']='Muhammet';//artik bu degiskeni session_start dedigimiz yerlerde kullanabiliyoruz.

$_SESSION['kullanici']=[
    'isim'=>'Muhammet',
    'soyisim'=>'celik',
    'yas'=>'10',
    'eposta'=>'abc@gmail.com',
];


