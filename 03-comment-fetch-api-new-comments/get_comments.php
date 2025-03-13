<?php
header('Content-Type: application/json');

$comments = file_exists('../01-comment-first-implementation/comments.txt') ? file('../01-comment-first-implementation/comments.txt', FILE_IGNORE_NEW_LINES) : [];
$lastTimestamp = isset($_GET['timestamp']) ? (int)$_GET['timestamp'] : 0;

$newComments = [];
$currentTimestamp = time(); // Get current timestamp

foreach ($comments as $comment) {
    // Extract timestamp from stored comment (assuming we format it like [timestamp] comment)
    if (preg_match('/^\[(\d+)\]\s(.+)$/', $comment, $matches)) {
        $commentTime = (int)$matches[1];
        $commentText = $matches[2];

        if ($commentTime > $lastTimestamp) {
            $newComments[] = $commentText;
        }
    }
}

echo json_encode([
    "comments" => $newComments,
    "timestamp" => $currentTimestamp // Send back the latest timestamp
]);
?>
