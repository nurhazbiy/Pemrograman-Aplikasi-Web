<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Pemrograman Aplikasi Web</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Tailwind dropdown toggle script
    function toggleDropdown() {
      const dropdown = document.getElementById('userDropdown');
      dropdown.classList.toggle('hidden');
    }
  </script>
</head>
<body class="bg-gray-100">
  <?php
  session_start();
  $isLoggedIn = isset($_SESSION['username']); // Check if the user is logged in
  ?>
  <header class="bg-gray-800 text-white py-4 px-6 flex justify-between items-center">
    <a href="/">
        <header class="bg-gray-800 text-white text-center">
            <h1 class="text-2xl font-bold">Pemrograman Aplikasi Web</h1>
        </header>
    </a>    <nav class="flex items-center">
      <a href="index.php" class="text-white hover:underline mx-2">Home</a>
      <?php if ($isLoggedIn): ?>
        <div class="relative">
          <button onclick="toggleDropdown()" class="text-white hover:underline mx-2">
            <?php echo htmlspecialchars($_SESSION['username']); ?> ▼
          </button>
          <div id="userDropdown" class="absolute right-0 mt-2 bg-white text-gray-800 rounded shadow-lg hidden">
            <a href="logout.php" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
          </div>
        </div>
      <?php else: ?>
        <a href="login.php" class="text-white hover:underline mx-2">Login</a>
        <a href="register.php" class="text-white hover:underline mx-2">Register</a>
      <?php endif; ?>
    </nav>
  </header>
  <main class="flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
      <h2 class="text-xl font-bold mb-4">Register</h2>

      <!-- Success Message -->
      <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
          Registration successful. <a href="login.php" class="text-blue-500 hover:underline">Login here</a>.
        </div>
      <?php endif; ?>

      <!-- Error Messages -->
      <?php if (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] == 'duplicate'): ?>
          <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            Error: The username is already taken. Please choose a different username.
          </div>
        <?php elseif ($_GET['error'] == 'password_mismatch'): ?>
          <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            Error: Passwords do not match. Please try again.
          </div>
        <?php elseif ($_GET['error'] == 'error'): ?>
          <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            Error: Unable to register. Please try again later.
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <form action="register_handler.php" method="POST" class="space-y-4">
        <div>
          <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
          <input type="text" id="username" name="username" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
          <input type="password" id="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Create Account</button>
      </form>
    </div>
  </main>
</body>
</html>