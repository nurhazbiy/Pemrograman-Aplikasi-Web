<?php
session_start();
require_once __DIR__ . '/../04-database/db.php'; // Include the database connection

if (!$db) {
    die('Database connection is not initialized.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $redirect = isset($_POST['redirect']) ? $_POST['redirect'] : 'index.php'; // Default to index.php if no redirect is provided

    // Query the database for the user
    $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];

            // Redirect to the original page or dashboard
            header('Location: ' . $redirect);
            exit;
        } else {
            // Password is incorrect
            header('Location: login.php?error=wrongpassword&redirect=' . urlencode($redirect));
            exit;
        }
    } else {
        // Username not found
        header('Location: login.php?error=notfound&redirect=' . urlencode($redirect));
        exit;
    }
} else {
    // Redirect to login page if accessed directly
    header('Location: login.php');
    exit;
}