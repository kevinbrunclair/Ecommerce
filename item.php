<?php

$name = 'TV';
$price = '999 euros';
$URL = 'Assets/tv.jpg';
?>


<!doctype html>

<html lang="fr">
<head>
    <title>test premier site</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
require 'header.php';
?>


<h1>Welcome</h1>

<div>
    <h2>Only one article : <?= $name ?> </h2>
    <h2>Price : <?= $price ?></h2>
    <img src="<?= $URL ?>" alt="photo tv">
</div>

<?php
include 'footer.php';
?>
</body>
</html>
