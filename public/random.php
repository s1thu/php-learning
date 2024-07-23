<?php $randomInt = random_int(1, 10); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your lucky number</title>
</head>
<body>
<h1>Your lucky number is: <?php echo $randomInt; ?></h1>
<?php if ($randomInt > 5) { ?>
    <h2>Nice, <?php
        echo htmlspecialchars($_COOKIE['name'], ENT_QUOTES);
        ?>!</h2>
<?php } ?>

<form method="post" action="/pictures.php">
    <input type="hidden" name="number" value="<?php
    echo $randomInt;
    ?>">
    <button type="submit">
        Now show me <?php echo $randomInt; ?> kittens!
    </button>
</form>
</body>
</html>