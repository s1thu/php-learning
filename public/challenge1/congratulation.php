<?php

$language_from_cookie = $_COOKIE['language'] ?? "English";
$languages =[
    'English' => 'Congratulations!',
    'Netherlands' => 'Gefeliciteerd!',
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge 1</title>
</head>
<body>
    <form action="" method="get">
        <label for="language">Select your language</label>
        <select name="language" id="language">
            <?php foreach ($languages as $language => $value): ?>
            <option value="<?=$language?>"><?=$language?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Submit</button>
    </form>
    <h1>
        <?php
            echo $languages[$language_from_cookie];
        ?>
    </h1>
</body>
</html>
<?php
    if(isset($_GET['language'])){
        if(!in_array($_GET['language'], array_keys($languages))){
            $_GET['language'] = 'English';
        }
        setcookie('language', $_GET['language']);
        header('Location: /challenge1/congratulation.php');
    }
?>
