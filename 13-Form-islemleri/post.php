<?php
//$_POST; bununla gelen veriyi karsilicaz.dizi depolar.

print_r($_POST);
echo $_POST['isim'];
echo $_POST['soyisim'];
//dizi fonksiyonlarini bunlar uzerindede uygulayabliriz.

function filtre($p){
    return is_array($p)?array_map('filtre',$p):htmlspecialchars(trim($p));//htmlspecialchars ile html etiketi kullanilarak veri girlirse ekarte eder.
}

//array_map ile tüm degerlere ulastik ve trim ile girilen degerlerideki bosluklari temizledik.
$dizi=array_map('filtre',$_POST);

echo '<pre>';
print_r($dizi);
echo htmlspecialchars_decode($dizi['isim']);//decode olaniylada html kullanimini tekrar aktiflestirdik.

//strip_tags() ise  girlen verideki tüm html etiketlerini siler.

//biz array_map i dizi icindeki vereiye(stringe) uygulayabiliyoruz.
//check box ile sectigimiz tüm verilerin gelmesi icin dil[] dizi yaptik.
//fakat ustte array_map dizi icerisindeki diziye uygulanmadigi icin hata veriyor.
//bunu is_array fonksiyonuyla duzeltiyoruz.