<?php
    if(isset($_POST['name'])){
        setcookie('name', $_POST['name'], time() + 3600);

    }
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
<form action="" method="post">
    <label for="name">Name
    </label>
    <input type="text" name="name" id="name">
    <button type="submit">Submit</button>
</form>
</body>
</html>
