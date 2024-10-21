<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_SESSION['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $deadline = $_POST['deadline'];

    $tasks = json_decode(file_get_contents('data/tasks.json'), true);
    if (!isset($tasks[$username])) {
        $tasks[$username] = [];
    }
    $tasks[$username][] = ['title' => $title, 'description' => $description, 'deadline' => $deadline];
    file_put_contents('data/tasks.json', json_encode($tasks));

    header('Location: dashboard.php');
}
?>
