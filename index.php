<?php
require_once __DIR__ .'/Product.php';
$ball = new DogGame('https://www.shoppypet.com/5455-large_default/ferplast-pa-6060-pallina-per-cani-in-vinile.jpg',
'Ball', '22$', 'Dog', 'Game');
$biscuits = new DogFood('https://www.amicipappagalli.it/wp-content/uploads/2017/11/L625.jpg',
'Dog Biscuits', '33$', 'Dog', 'Food');
$dogHouse = new DogBed('https://m.media-amazon.com/images/I/61uVwT57rQL._AC_UF894,1000_QL80_.jpg',
'DogBed','44$','Dog','Bed');

$woolBall = new CatGame('https://img.pixers.pics/pho_wat(s3:700/FO/40/14/75/32/700_FO40147532_7ca99d8dbe7f8bf8c5db673be9df60b4.jpg,700,464,cms:2018/10/5bd1b6b8d04b8_220x50-watermark.png,over,480,414,jpg)/carte-da-parati-gomitolo-di-lana.jpg.jpg',
'Wool Ball','4$','Cat','Game');
$wetFood = new CatFood('https://www.naturepetshop.it/wp-content/uploads/leonardo-fegato-400-gr-lattine.jpg',
'Wet Food','20$','Cat','Food');
$box = new CatBed('https://www.infopackaging.it/wp-content/uploads/2018/08/RM_20141001_M0U9635.jpg',
'Box','34$','Cat','Bed');

$products = [$ball, $biscuits, $dogHouse, $woolBall, $wetFood, $box]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Animal Store</h1>
    <div class="container-sm">
        <div class="card">
        <?php 
        foreach ($products as $singleProduct) {
            foreach ($singleProduct as $key=> $value) {
                echo $key.' '.$value.'<br>';
            }
        } ?>
        </div>
    </div>
</body>
</html>