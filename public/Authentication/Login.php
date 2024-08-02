<?php
session_start();

$users = [
    'sithu' => '$2y$10$vvr3SEX1FsAMXdai5SKDtOXGP0fzK0eqerj4qpzLNZBFsyMbfR3AK'
];

if (isset($_POST['username'], $_POST['password'])) {
    // The user has submitted the login form

    if (isset($users[$_POST['username']])) {
        // The provided username is correct, now validate the password
        $expectedPasswordHash = $users[$_POST['username']];

        if (
            password_verify($_POST['password'], $expectedPasswordHash)
        ) {
            // The provided password is also correct

            // Remember the username of the user who just logged in
            $_SESSION['authenticated_user'] = $_POST['username'];

            // Redirect to /secret.php
            header('Location: /Authentication/secret.php');
            exit;
        }
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<form method="post">
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>