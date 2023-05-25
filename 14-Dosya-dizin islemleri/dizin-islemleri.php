<?php

//file_exists() dizin islemlerindede kullaniliyor.eger 14.kısımdaki 2 dosyayı deneme diye klasor olusturup icine atarsak ve file_exists ile kontrol edersek true doner.

//yeni bir dizin olusturur.
mkdir('yeniklasormkdir');//bu ısımde bır dizin varken ayni isimde olusturmaya kalkarsan hata verir.
//yeni dizin olusturmadan once varlıgını fiile_exits ile kontrol ederiz.

$diziadi='ahmet';
if(file_exists($diziadi)){
    echo 'bu dizin zaten olusturulmus';

}
else{
    mkdir($diziadi);
}
//klasor altında klasorde olusturabiliriz.
$ucludizi='c/b/a';
if(file_exists($ucludizi)){
    echo 'bu dizin zaten olusturulmus';
}
else{
    if(mkdir($ucludizi,0777,true))//0777 default deger,true diyerek recursiveye izin verdik.
        echo 'dizin olusturuldu'; 
    else
        echo 'hata meydana geldi';
}
//dizin silmek icin kullanılır.coklu klasorse sonuncusunu siler.
rmdir($ucludizi);