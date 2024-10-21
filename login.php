<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents('data/users.json'), true);
    if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    } else {
        echo 'Invalid login credentials';
    }
}
?>
