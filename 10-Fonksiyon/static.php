<?php
function say(){
    static $sayi=0;//fonksiyonun son degeriyle kalmasini istiyorsak basina static yazilir.yazmasaydik her cagirdigimizda yine 0 degerini alacakti.
    echo $sayi;
    $sayi++;

}
say();
say();
say();
say();
say();