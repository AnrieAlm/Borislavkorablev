<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // File upload
    $targetDir = "../uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $dbPath = "uploads/" . $fileName;

    $stmt = $conn->prepare("INSERT INTO projects (title, category, description, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $category, $description, $dbPath);
    $stmt->execute();

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Project</title>
  <link rel="stylesheet" href="../style2.css">
</head>
<body>
  <h1>Add New Project</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title" required>

    <label>Category</label>
    <input type="text" name="category" required>

    <label>Description</label>
    <textarea name="description"></textarea>

    <label>Image</label>
    <input type="file" name="image" required>

    <button type="submit">Add Project</button>
  </form>
</body>
</html>
