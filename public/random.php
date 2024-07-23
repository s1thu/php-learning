<?php

$randomInt = rand(1, 100);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Your Lucky number is <?=$randomInt?></h1> <br>

<h3>Passing Values between Requests Using Query Parameter</h3>
<a href="kitchen.php?number=<?=$randomInt?>">Go to Kitchen.php</a>
</body>
</html>
