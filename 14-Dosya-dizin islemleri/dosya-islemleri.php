<?php

//php de dosya olusturma. locale gidip acinca otomatik olarak olustu.
/*touch('test.txt',time());
touch('test2.txt',time()); //time() suanki zamani veriyor degistirilme tarihi icin
touch('test3.txt',time()-86400);//-86400 1 gün çikardik anlamina geliyor degistirilme tarihi icin*/

//php de dosya silme
/*unlink('test2.txt');
unlink('test.txt');
unlink('test3.txt');*/

//php de dosya acma fopen(textfile,nasıl erişim yapacagımız).

/*Dosya Erişim Modları - Dosya Kipleri
r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.
r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.
w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir. Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır. Dosya belirtilen adreste yok ise yeniden oluşturulur.
w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.
a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir. Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir. Dosya belirtilen adreste yok ise yeniden oluşturulur.
x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir. Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.
x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir. Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.


*/

$file=fopen('test.txt','r');
//var_dump($file);

/*echo fgets($file);//dosyayı satir satir okucaz.
fclose($file);//fclose ile kapatiyoruz.*/

//echo fread($file,150);//fread ile 150 byte okumasini sagliyoruz.
//fread ile tum dosyayi okumak istersek
$size= filesize('test.txt');//filesize ile boyutu alip fread e yazariz.bir degiskene atayıp da yapabiliriz.
echo fread($file,$size);

echo '<hr>';

/*$file2=fopen('test.txt','a');//simdi ise yazma yapicaz.

fwrite($file2,'yeni veri girişi');
fputs($file2,'puts ile yeni veri');// \n ile alt satira da gecirebiliriz.

//feof ile dosyanin sonuna gelip gelmedigimizi anlayabiliyoruz en sona gelince true yani 1 yaziyor.
fclose($file);
*/



/*Varlık Kontrolü
file_exists() Dosya ve dizin fonksiyonlarından birisi olan file_exists fonksiyonu ile PHP’de dosya veya dizin varlığını kontrol eder.

is_file() fonksiyonu, içerisine girilen adresin dosya olup olmadığını kontrol etmek için kullanılır.*/


//diger bir veri yazma yoluda bu sekilde.file_append ile sonuna yazacagimizi belirttik.
file_put_contents('test2.txt','file put contensts ile veri eklendi',FILE_APPEND);

//bununlada veriyi okuyabiliyoruz.
$get=file_get_contents('test2.txt');
print_r($get);

//php dosyasida olusturabiliriz.
$dosya='<?php ';//veriyi olustrduk
$dosya.='$isim="Muhammet ";';
$dosya.='echo $isim;';

file_put_contents('a.php',$dosya);