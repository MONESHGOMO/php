<?php
include 'db.php';

$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit User</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Back</a>
</body>

</html>