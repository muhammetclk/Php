<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<!-- action:form icindeki verileri nereye gonderecegimizi belirttigimiz kisim.
method ise bu formu hangi methodla gonderecegimiz kisim(post,get)
-->
<!--buraya direk get verisi ekleyebiliyoru.request ile hepsini alabiliyoruz. -->
<form action="request.php?islem=merhaba" method="post">

<!--isim burda key olucak. post ile bunu kullanarak veriyi alicaz. -->
<input type="text" name="isim" placeholder="Isim"><!--Isim ve Soyisim olmak üzere iki veri yollucaz. -->
<input type="text" name="soyisim" placeholder="Soyisim">
<hr>
<label> Diller</label><br>
<label> PHP</label>
<input type="checkbox" value="php" name="dil[]"><br>
<label> Nodejs</label>
<input type="checkbox" value="nodejs" name="dil[]"><br>
<label> Javascript</label>
<input type="checkbox" value="javascript" name="dil[]"><br>

<button type="submit">gonder</button>
</form>
    
</body>
</html>
