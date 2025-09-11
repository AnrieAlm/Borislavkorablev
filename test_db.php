<?php
include 'db.php';

try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM projects");
    $count = $stmt->fetchColumn();
    echo "✅ Connected! Found $count projects in database.";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>