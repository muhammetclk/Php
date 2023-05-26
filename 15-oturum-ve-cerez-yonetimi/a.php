<?php

//once oturumu baslatmadan kullanalim.
echo $_SESSION['isim'];//ulasamadik

session_start();//oturumu baslattik ve eristik.
//echo $_SESSION['isim'];

//sil.php de session_destroy yapinca isim degiskeni gitti
//isset ile bir degiskenin varligini kontrol ediyoruz.
/*if(isset($_SESSION['isim'])){
    echo 'merhaba '.$_SESSION['isim'].' hosgeldin';
}
else {
    echo 'lütfen oturum aciniz.';
}*/
echo '<hr>';

if(isset($_SESSION['kullanici']['isim'])){
    echo '<pre>';
    echo 'merhaba '.$_SESSION['kullanici']['isim'].' hosgeldin';
    print_r($_SESSION);

}
else {
    echo 'lütfen oturum aciniz.';

}
