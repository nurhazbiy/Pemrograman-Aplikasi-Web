<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Comment System with Live Updates</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<body>
    <a href="/">
        <header>
            <h1>Pemrograman Aplikasi Web</h1>
        </header>
    </a>
    <div class="container">
        <h2>Leave a Comment</h2>
        <form id="commentForm" action="comments.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <h2>Comments</h2>
        <div class="comments-section" id="comments-section">
            <!-- Comments will be loaded here dynamically -->
        </div>
    </div>
</body>
</html>
