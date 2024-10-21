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
            <form id="registerForm">
                <input type="text" id="username" placeholder="Username" required>
                <input type="password" id="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Login Form -->
        <div id="login">
            <h2>Login</h2>
            <form id="loginForm">
                <input type="text" id="loginUsername" placeholder="Username" required>
                <input type="password" id="loginPassword" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Task Dashboard -->
        <div id="dashboard" style="display:none;">
            <h2>Task Dashboard</h2>
            <button id="logout">Logout</button>
            <div id="taskForm">
                <input type="text" id="taskTitle" placeholder="Task Title" required>
                <input type="text" id="taskDescription" placeholder="Task Description" required>
                <input type="date" id="taskDeadline" required>
                <button id="addTask">Add Task</button>
            </div>
            <div id="tasks"></div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
</body>
</html>
