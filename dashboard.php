<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}

$username = $_SESSION['username'];
$tasks = json_decode(file_get_contents('data/tasks.json'), true);
$userTasks = isset($tasks[$username]) ? $tasks[$username] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Dashboard</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div id="dashboard">
        <h2>Task Dashboard</h2>
        <a href="logout.php">Logout</a>
        <form action="add_task.php" method="POST">
            <input type="text" name="title" placeholder="Task Title" required>
            <input type="text" name="description" placeholder="Task Description" required>
            <input type="date" name="deadline" required>
            <button type="submit">Add Task</button>
        </form>
        <div id="tasks">
            <?php foreach ($userTasks as $task): ?>
                <div>
                    <h3><?php echo $task['title']; ?></h3>
                    <p><?php echo $task['description']; ?></p>
                    <p><?php echo $task['deadline']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
