<?php
$iphone = [
    "name" => "Iphone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10,
    "picture_url" => "https://cdn.lesnumeriques.com/optim/product/61/61451/ff882d13-iphone-13-pro__450_400.jpeg",
];

$ipad = [
    "name" => "Ipad",
    "price" => 35000,
    "weight" => 200,
    "discount" => 8,
    "picture_url" => "https://www.apple.com/v/ipad-air/r/images/overview/design/colors_ipad_5__ceq7dhqtzfua_large.jpg",
];

$imac = [
    "name" => "Imac",
    "price" => 30000,
    "weight" => 200,
    "discount" => 5,
    "picture_url" => "https://cdn.lesnumeriques.com/optim/produits/71/20873/apple-imac-21-5-pouces-2014_c5b12519ad177b6c_png__450_400.jpg",
];
?>

<!doctype html>

<html lang="fr">
<head>
    <title>test premier site</title>
    <meta charset="UTF-8">
</head>
<body>

<div>
  <h3><?= $iphone['name']?></h3>
<p>Price : <?= $iphone['price'] . " euros "?></p>
<img src=<?= $iphone['picture_url']?>>
</div>

<div>
    <h3><?= $ipad['name']?></h3>
    <p>Price : <?= $ipad['price']. " euros "?></p>
    <img src=<?= $ipad['picture_url']?>>
</div>

<div>
    <h3><?= $imac['name']?></h3>
    <p>Price : <?= $imac['price']. " euros "?></p>
    <img src=<?= $imac['picture_url']?>>
</div>

</body>
</html>
