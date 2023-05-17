<?php
$isimler=["Ahmet","Mehmet","Ali","veli"];

foreach($isimler as $deger){
    echo $deger.'<br>';
}

foreach($isimler as $index=> $deger){//bu sekilde index numrasaınıda alabiliriz.
    echo $deger.'<br>';
    echo $index.'<br>';

}

foreach($isimler as $index=> $deger){// degerleri bu sekildede alabiliriz.
    echo $isimler[$index].'<br>';
}