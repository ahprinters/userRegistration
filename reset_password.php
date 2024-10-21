<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $users = json_decode(file_get_contents('data/users.json'), true);

    foreach ($users as $email => $user) {
        if ($user['reset_token'] === $token && $user['token_expiry'] > time()) {
            $users[$email]['password'] = $new_password;
            unset($users[$email]['reset_token']);
            unset($users[$email]['token_expiry']);
            file_put_contents('data/users.json', json_encode($users));
            echo 'Password reset successful!';
            exit();
        }
    }
    echo 'Invalid or expired token.';
}
?>
