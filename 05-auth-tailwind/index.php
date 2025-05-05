<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemrograman Aplikasi Web - Dashboard</title>
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
        </a>
        <nav class="flex items-center">
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
            <?php endif; ?>
        </nav>
    </header>
    <main class="py-8">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Login Card -->
            <div class="bg-white shadow-md rounded-lg p-6 width-300">
                <h2 class="text-lg font-bold mb-2">Login</h2>
                <p class="text-gray-600 mb-4">Access the login page to authenticate users. This page includes form validation and error handling for invalid credentials.</p>
                <a href="login.php" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">View Implementation</a>
            </div>
            <!-- Register Card -->
            <div class="bg-white shadow-md rounded-lg p-6 width-300">
                <h2 class="text-lg font-bold mb-2">Register</h2>
                <p class="text-gray-600 mb-4">Navigate to the registration page to create a new user account. Includes validation for duplicate usernames and password confirmation.</p>
                <a href="register.php" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">View Implementation</a>
            </div>
        </div>
    </main>
</body>

</html>