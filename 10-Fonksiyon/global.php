<?php

 $isim='ahmet';//fonksiyon bu degiskeni gormuyor.global olarak belirtmeliyiz.
function isimyaz(){
    global $isim;//dısardaki degiskene ulasmamizi sagliyor.
    echo $isim;
}
isimyaz();