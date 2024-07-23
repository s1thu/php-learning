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
<form action="">
    <?php
    echo $_COOKIE['name'] ?? "No name";
    $pictures =[
        'cat.jpeg' => 'Cat',
        'dog.jpeg' => 'Dog'
    ]
    ?>
    <h1>Form</h1>
    <label for="picture">
        Select a picture:
    </label>
    <select name="picture" id="picture">
        //code refactor using pictures array
        <?php foreach($pictures as $picture => $name): ?>
        <option value="<?=$picture?>"<?php
        if (isset($_GET['picture'])
            && $_GET['picture'] === $picture) {
            ?> selected<?php
        } ?>>
        <?php //=ucfirst(explode('.', $picture)[0])
        echo htmlspecialchars($name, ENT_QUOTES);
        ?>
        </option>
        ?>
        <?php endforeach; ?>
    </select>
    <div>
        <label for="number">
            Number of pictures to show:
        </label>
        <input name="number" value="<?php
        if (isset($_GET['number'])) {
            echo htmlspecialchars($_GET['number'], ENT_QUOTES); }
        ?>">
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>