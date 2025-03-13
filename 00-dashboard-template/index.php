<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pemrograman Aplikasi Web</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <a href="/">
    <header>
      <h1>Pemrograman Aplikasi Web</h1>
    </header>
  </a>
  <main>
    <div class="card-container">
      <div class="card">
        <h2>First Implementation</h2>
        <p>The initial version of the comment system, using basic PHP for form submission and page reloads to add comments.</p>
        <a href="01-comment-first-implementation/index.php" class="btn">View Implementation</a>
      </div>
      <div class="card">
        <h2>Implementation with Fetch API</h2>
        <p>This project uses the Fetch API in JavaScript to asynchronously submit new comments and update the comment list without reloading the page.</p>
        <a href="02-comment-fetch-api/index.php" class="btn">View Implementation</a>
      </div>
      <div class="card">
        <h2>Implementation with Fetch API (Only New Comments)</h2>
        <p>An enhanced version that fetches and displays only new comments since the last update, making the comment system more efficient and dynamic.</p>
        <a href="03-comment-fetch-api-new-comments/index.php" class="btn">View Implementation</a>
      </div>
    </div>
  </main>
</body>
</html>
