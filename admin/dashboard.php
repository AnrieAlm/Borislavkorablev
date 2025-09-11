<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../style2.css">
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>
  <a href="add_project.php">+ Add New Project</a> | 
  <a href="logout.php">Logout</a>

  <h2>All Projects</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Category</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
   $stmt = $pdo->prepare("SELECT * FROM projects ORDER BY created_at DESC");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); // ← Use fetchAll for PDO

foreach ($result as $row) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['category']}</td>
            <td><img src='../{$row['image']}' width='100'></td>
            <td><a href='delete_project.php?id={$row['id']}' onclick='return confirm(\"Delete this project?\")'>Delete</a></td>
          </tr>";

    }
    ?>
  </table>
</body>
</html>
