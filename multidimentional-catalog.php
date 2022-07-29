<?php

$products = [
    "iphone" => [
        "name" => "Iphone",
        "price" => 450,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://cdn.lesnumeriques.com/optim/product/61/61451/ff882d13-iphone-13-pro__450_400.jpeg"
    ],
    "ipad" => [
        "name" => "Ipad",
        "price" => 499,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://www.apple.com/v/ipad-air/r/images/overview/design/colors_ipad_5__ceq7dhqtzfua_large.jpg"
    ],
    "imac" => [
        "name" => "Imac",
        "price" => 478,
        "weight" => 400,
        "discount" => 5,
        "picture_url" => "https://as-images.apple.com/is/refurb-2017-imac-215-gallery?wid=1000&hei=1000&fmt=jpeg&qlt=95&.v=1499114976977"
]
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
    <h3><?= $products['iphone']['name']?></h3>
    <p>Price : <?= $products['iphone']["price"] . " euros "?></p>
    <img src=<?= $products['iphone']['picture_url']?>>
</div>

<div>
    <h3><?= $products['ipad']['name']?></h3>
    <p>Price : <?= $products['ipad']["price"] . " euros "?></p>
    <img src=<?= $products['ipad']['picture_url']?>>
</div>

<div>
    <h3><?= $products['imac']['name']?></h3>
    <p>Price : <?= $products['imac']["price"] . " euros "?></p>
    <img src=<?= $products['imac']['picture_url']?>>
</div>


</body>
</html>

