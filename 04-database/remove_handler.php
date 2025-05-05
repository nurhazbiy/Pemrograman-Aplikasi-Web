<?php
include './db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    $nim = $_POST['nim'];
    $stmt = $db->prepare("DELETE FROM students WHERE nim = :nim");
    $stmt->execute(['nim' => $nim]);
    header('Location: index.php'); // Refresh the page to show updated data
    exit;
}