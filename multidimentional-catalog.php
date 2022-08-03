<?php

require 'my-functions.php';

$products = [
    "iphone" => [
        "name" => "Iphone",
        "price" => 45000,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://cdn.lesnumeriques.com/optim/product/61/61451/ff882d13-iphone-13-pro__450_400.jpeg",
        "tva" => 20,
    ],
    "ipad" => [
        "name" => "Ipad",
        "price" => 49900,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://www.apple.com/v/ipad-air/r/images/overview/design/colors_ipad_5__ceq7dhqtzfua_large.jpg",
        "tva" => 20,
    ],
    "imac" => [
        "name" => "Imac",
        "price" => 47800,
        "weight" => 400,
        "discount" => 5,
        "picture_url" => "https://as-images.apple.com/is/refurb-2017-imac-215-gallery?wid=1000&hei=1000&fmt=jpeg&qlt=95&.v=1499114976977",
        "tva" => 20,
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

<?php
foreach ($products as $product) {
    ?>

    <div>
        <h3><?= $product['name'] ?></h3>
        <?php if ($product["discount"] == null) { ?>
            <p>Price : <?php formatPrice($product["price"]) ?></p>
            <?php
        } else { ?>
            <p>Discount : <?php echo $product["discount"] . " % " ?></p>
         Price : <span style="text-decoration: line-through red"><?php echo formatPrice($product['price']) ?></span><br><br><span><?php echo formatPrice(discountedPrice($product["price"], $product["discount"])) ?></span>
            <?php
        } ?>
        <p>Price HT : <?php echo formatPrice(priceExcludingVAT($product["price"], $product["tva"])) ?></p>
        <p>Weight : <?= $product["weight"] ?></p>
        <img src="<?= $product['picture_url'] ?>">
    </div>
    <?php
}
?>


</body>
</html>

