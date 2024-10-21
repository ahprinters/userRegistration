<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $users = json_decode(file_get_contents('data/users.json'), true);
    $users[$username] = ['password' => $password];
    file_put_contents('data/users.json', json_encode($users));

    header('Location: index.php');
}
?>
