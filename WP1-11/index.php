<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

define('MAX', 50);
define('MIN', 1);

$img = rand(MAX, MIN);

for ($i=0; $i <= $img; $i+= 1) { ?>
   <img src="https://vignette.wikia.nocookie.net/despicableme/images/c/ca/Bob-from-the-minions-movie.jpg/revision/latest?cb=20151224154354" alt="minion" width=90> <?php
}

?>







</body>
</html>