<?php

//oturumu silmek icinde session_destroy(); kullanılır fakat once session un start olmasi gerekli
//session_destroy();

session_start();
session_destroy();

header('location','a.php');//a.php sayfasina yonlendirdik.