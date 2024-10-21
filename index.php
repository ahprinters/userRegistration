<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="app">
        <!-- Registration Form -->
        <div id="register">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Display Registered Users -->
        <!-- <h2>Registered Users</h2> -->
        <div>
            <?php
            // Read the JSON file
            // $jsonData = file_get_contents('data/users.json');

            // Decode the JSON data into an associative array
            // $users = json_decode($jsonData, true);

            // Display each user on a new line
            // foreach ($users as $username => $details) {
            //     echo "Username: " . htmlspecialchars($username) . "<br>";
            //     echo "Password: " . htmlspecialchars($details['password']) . "<br><br>";
            // }
            ?>
        </div>

        <!-- Login Form -->
        <div id="login">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
