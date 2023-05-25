<?php

//scandir(),glob() ile dosya listeleme yapiyoruz.

echo __DIR__;//bu php de tanimli sabit ile dosyanin tam yolu veriyor.

$array=scandir('.');//bulundugumuz yerdeki tüm klasorleri listeledik.
echo '<pre>';
print_r($array);
echo '<hr>';
$basedir=require '../base.php';//.. ile disari cikiyor.alt katmandan ust katmana gibi sdusunebiliriz.
$array2=scandir($basedir);
print_r($array2);
echo '<hr>';
/*glob ile tüm dosyalari listeleyebiliriz ve paternde verebiliriz. glob tam yolunu veriyor.*/
$array3=glob($basedir.'/*');//noktayı unutma
print_r($array3);// /* koymasaydik sadece listelemek istedigimiz yolu dondururdu
echo '<hr>';

$array4=glob($basedir.'/*'.'php');//uzantısı php olanlari getirir.ana menude sadece base.php var.
print_r($array4);
echo '<hr>';

//fonksiyonlardaki ozellik use ile istedigimiz degiskeni fonksiyon icinde kullanabiliyoruz.
//use kullanmasaydik fonk icinde global $basedir yazmak zorundaydik.
//burda array map ile array4 deki her bir elemana eristik ve str ozelliklerinde replace ile basedir kismini bos olacak sekilde guncelledik.artik c:\mamp\htdocs\first($basedir bunlardan olusuyor) yazmicak. 
$array5=array_map(function($e)use($basedir){
return str_replace($basedir,' ',$e);
},$array4);
print_r($array5);

echo '<hr>';
$array6=array_map(function($e)use($basedir){// manuel olarak / danda kurtulmus olduk.
    return str_replace($basedir.'/',' ',$e);
    },$array4);
    print_r($array6);
    echo '<hr>';


//simdi tum klasorlerdeki dosyalarla bereaber listelicez.
function listAll($dir){
    $files=scandir($dir);

    echo '<ul>';
    foreach($files as $file ){
        if($file!='.' && $file !='..'){//iki disa cikmak icin gelen dizinleri cikardik.

        
    echo '<li>';
        echo $file;
        if(is_dir($dir.'/'.$file)){//burda isdir ile klasir  icinde(/). dosya(file) varmi diye bakiyor.bunun icinde fonksiyonu tekrar calistiricaz.
            listAll($dir.'/'.$file);//listelemek iztedigmiz dizin artik bu
        }
            
        echo '</li>';
        'endforeach';
        }
    }
    echo '</ul>';
   
}
listAll($basedir);
echo '<hr>';
// biz glob ile php olanlari almistik onun yanina daha farkli uzantili olanlari da ekleyebeliriz.
$array7=glob($basedir.'/*'.'{php,txt}',GLOB_BRACE);//Glob_brace farkli uzanti olunca eklemeliyiz.
print_r($array7);
echo '<hr>';

//glob u ornegin fonksiyonlar diye bir klasorumuz olsun ve orda bir suru fonksiyon tanimli olsun
//ordaki fonksiyonlari tek tek buraya eklemek zahmetli olacaktir.
//bunu yerine foreach dongusu ile dosya yollarina erisip her bir yolu require ile dosyamiza ekleyebiliriz.
//mail yollamada bu sekilde gerceklesir.
$array8=glob($basedir.'/fonksiyonlar/*.{php}',GLOB_BRACE);
print_r($array8);
foreach($array8 as $file){
    require $file;
}

mailyolla();
