<?php
require_once 'config.php';

// Fetch all users
$stmt = $pdo->query("SELECT * FROM users ORDER BY id DESC");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        .btn { padding: 5px 10px; text-decoration: none; color: white; border-radius: 3px; }
        .btn-add { background-color: #4CAF50; }
        .btn-edit { background-color: #2196F3; }
        .btn-delete { background-color: #f44336; }
    </style>
</head>
<body>
    <h1>User Management System</h1>
    <a href="create.php" class="btn btn-add">Add New User</a>
    <br><br>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php echo $user['created_at']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-delete" 
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>