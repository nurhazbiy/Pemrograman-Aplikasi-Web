<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pemrograman Aplikasi Web</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto px-4">
      <h1 class="text-2xl font-bold text-center">Pemrograman Aplikasi Web</h1>
    </div>
  </header>
  <main class="py-8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">First Implementation</h2>
          <p class="text-gray-600 mb-4 flex-grow">The initial version of the comment system, using basic PHP for form submission and page reloads to add comments.</p>
          <a href="01-comment-first-implementation/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">Implementation with Fetch API</h2>
          <p class="text-gray-600 mb-4 flex-grow">This project uses the Fetch API in JavaScript to asynchronously submit new comments and update the comment list without reloading the page.</p>
          <a href="02-comment-fetch-api/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">Implementation with Fetch API (Only New Comments)</h2>
          <p class="text-gray-600 mb-4 flex-grow">An enhanced version that fetches and displays only new comments since the last update, making the comment system more efficient and dynamic.</p>
          <a href="03-comment-fetch-api-new-comments/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
        <!-- Card 4 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">Database Setup with PDO</h2>
          <p class="text-gray-600 mb-4 flex-grow">Set up a secure database connection using PHP PDO with environment-based configuration.</p>
          <a href="04-database/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
        <!-- Card 5 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">User Authentication with Tailwind CSS</h2>
          <p class="text-gray-600 mb-4 flex-grow">A user authentication system with login and registration pages, styled using Tailwind CSS.</p>
          <a href="05-auth-tailwind/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
        <!-- Card 6 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
          <h2 class="text-lg font-bold mb-2">PDF Upload Project</h2>
          <p class="text-gray-600 mb-4 flex-grow">Allows users to upload PDF files securely and view them in a user-friendly interface.</p>
          <a href="06-pdf-upload/index.php" class="bg-blue-500 text-white py-2 px-4 rounded-md text-center hover:bg-blue-600">View Implementation</a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>