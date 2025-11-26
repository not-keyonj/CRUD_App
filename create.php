<?php
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $phone]);
    
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 300px; display: block; }
        button { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Add New User</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <button type="submit">Save User</button>
    </form>
    <br>
    <a href="index.php">Back to List</a>
</body>
</html>