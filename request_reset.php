<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $users = json_decode(file_get_contents('data/users.json'), true);

    if (isset($users[$email])) {
        $token = bin2hex(random_bytes(16));
        $users[$email]['reset_token'] = $token;
        $users[$email]['token_expiry'] = time() + 900; // 15 minutes expiry
        file_put_contents('data/users.json', json_encode($users));

        // Send email with reset link (pseudo-code)
        // mail($email, "Password Reset", "Click the link to reset your password: http://yourdomain.com/reset_password.php?token=$token");
    }
    echo 'If your email is registered, you will receive a password reset link.';
}
?>
