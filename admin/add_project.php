<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // File upload
    // File upload
$targetDir = "../images/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

$fileName = basename($_FILES["image"]["name"]);
$targetFile = $targetDir . $fileName;
$fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

// Validate file type
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($fileType, $allowedTypes)) {
    die("Error: Only JPG, JPEG, PNG & GIF files are allowed.");
}

// Validate file size (max 5MB)
if ($_FILES["image"]["size"] > 5000000) {
    die("Error: File is too large.");
}

if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    die("Error: Failed to upload file.");
}

$dbPath = "images/" . $fileName;

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
