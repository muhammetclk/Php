<?php

function sayi($i){
    echo $i;
    if($i<5){
        $i++;
        sayi($i);//fonsiyonun kendini tekrar cagirmasi
    }
}
sayi(1);
echo '<br>';
//recursive nin gercek hayatta kategorilerin hiyerasik bir sekilde alinmasini saglar.
echo '<pre>';
$categories=
[
    [
        'id'=>1,
        'parent'=>0,//üst kategoriye ait id bilgisi.
        'name'=>'Front-end'
    ],
    [ 
        'id'=>2,
        'parent'=>0,//üst kategoriye ait id bilgisi.
        'name'=>'Back-end'
    ],
    [
        'id'=>3,
        'parent'=>2,//üst kategoriye ait id bilgisi.
        'name'=>'Php'
    ],
    [
        'id'=>4,
        'parent'=>1,//üst kategoriye ait id bilgisi.
        'name'=>'VueJs'
    ],
    [
        'id'=>5,
        'parent'=>1,//üst kategoriye ait id bilgisi.
        'name'=>'Css'
    ],

];

function getcategories($arr,$par=0){
    $html="";
    $html.='<ul>';
    foreach($arr as $item){
        if($item['parent']==$par)
        { 
            $html.='<li>';
            $html.=$item['name'];
            $html.=getcategories($arr,$item['id']);//recursive
            $html.='</li>';
        }     
    }
    $html.='</ul>';
    return $html;
}
echo getcategories($categories);




