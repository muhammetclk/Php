<?php 

$hayvanlar=[
    'UcanHayvanlar'=>['sahin','Baykus','Karga'],
    'SürüngenHayvanlar'=>['solucan','tırtıl','kertenkele']
    ];

    echo "<pre>";
    print_r($hayvanlar);

    echo $hayvanlar['UcanHayvanlar'][1];

$hayvanlar2=[
    'a'=>[],
         'b'=>[],
                'c'=>[],
                    'd'=>[],
                            'e'=>[1,2,3,4,5],
];
print_r($hayvanlar2);


