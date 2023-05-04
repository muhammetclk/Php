<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "komut 1";
    echo "komut2"
    ?><!-- html ile ilgili birşey yapıcaksak  bu sekılde kapatmamız gerek. -->
    <h1>baslık</h1>
    <p>Lorem ipsum dolor sit amet.</p>
    <?php echo 'selam'  ?>

    <?php echo "<p>Lorem ipsum dolor sit amet.</p>" ?> <!-- bu sekılde echo ıcerisine html etiketi yazilabilir. -->
    <?= "sonkomut" ?>

    <script>alert( '<?php echo "selam naber js komutu" ?>')</script>
    <!-- bjs kodunun ıcınede php kodunu gomebiliriz. -->
    <!-- body kısmına kadar olan kısmı php de echo ile  alabiliriz -->



</body>
</html>