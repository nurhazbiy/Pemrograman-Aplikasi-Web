<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $comment = trim($_POST["comment"]);

    if (!empty($name) && !empty($comment)) {
        $formattedComment = "<b>" . htmlspecialchars($name) . ":</b> " . htmlspecialchars($comment) . "\n";
        file_put_contents("comments.txt", $formattedComment, FILE_APPEND);
    }
}

header("Location: index.php");  // Redirect back to main page
exit;
?>
