<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<!-- PhpDev/php/crud/index.php -->

<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>User List</h2>
    <a href="create.php">+ Add New</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>