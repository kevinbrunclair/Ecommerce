<?php

$products = ["iPhone", "iPad", "iMac"];
sort($products);
print_r($products);

echo "<br>";
print_r($products[0]);
echo "<br>";
echo "<br>";
$longueur = count($products);
print_r($products[$longueur - 1]);
echo "<br>";
echo "<br>";

for ($i = 0; $i < 3; $i++) {
    echo "- $products[$i] \n";
}
echo "<br>";

foreach ($products as $product) {
    echo "- $product \n";
}

?>

