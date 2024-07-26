<?php
session_start();

if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['message'] = 'Hello Welcome from Sithu\'s Login ' . $_SESSION['name'];
    header('Location: /Session/loginsuccess.php');
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Test</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>