<?php
header('Content-Type: application/json');

$comments = file_exists('../01-comment-first-implementation/comments.txt') ? file('../01-comment-first-implementation/comments.txt', FILE_IGNORE_NEW_LINES) : [];
echo json_encode($comments);
?>
