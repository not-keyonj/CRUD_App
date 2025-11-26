<?php
require_once 'config.php';

$id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $pdo->prepare("UPDATE users SET name=?, email=?, phone=? WHERE id=?");
    $stmt->execute([$name, $email, $phone, $id]);
    
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 300px; display: block; }
        button { background-color: #2196F3; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST">
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>">
        <button type="submit">Update User</button>
    </form>
    <br>
    <a href="index.php">Back to List</a>
</body>
</html>