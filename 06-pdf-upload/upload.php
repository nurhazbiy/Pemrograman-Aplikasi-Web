<?php
session_start();

// Restrict access to logged-in users
if (!isset($_SESSION['username'])) {
    $_SESSION['feedback'] = 'Error: You must be logged in to upload files.';
    header('Location: index.php');
    exit;
}

// Ensure the uploads directory exists
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Initialize feedback message
$_SESSION['feedback'] = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf_file'])) {
    $file = $_FILES['pdf_file'];

    // Validate file type
    if ($file['type'] !== 'application/pdf') {
        $_SESSION['feedback'] = 'Error: Only PDF files are allowed.';
        header('Location: index.php');
        exit;
    }

    // Move the uploaded file to the uploads directory
    $targetPath = $uploadDir . basename($file['name']);
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        $_SESSION['feedback'] = 'Success: File uploaded successfully!';
    } else {
        $_SESSION['feedback'] = 'Error: Failed to upload file.';
    }
} else {
    $_SESSION['feedback'] = 'Error: No file uploaded.';
}

// Redirect back to the form
header('Location: index.php');
exit;