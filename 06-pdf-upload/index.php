<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
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
    $currentUrl = urlencode($_SERVER['REQUEST_URI']);
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
                <a href="view_uploads.php" class="text-white hover:underline mx-2">View Uploads</a>
            <?php endif; ?>
            <div class="relative">
                <?php if ($isLoggedIn): ?>
                    <!-- User Menu -->
                    <button onclick="toggleDropdown()" class="text-white hover:underline mx-2">
                        <?php echo htmlspecialchars($_SESSION['username']); ?> ▼
                    </button>
                    <div id="userDropdown" class="absolute right-0 mt-2 bg-white text-gray-800 rounded shadow-lg hidden">
                        <a href="/05-auth-tailwind/logout.php" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                    </div>
                <?php else: ?>
                    <!-- Login/Register Links -->
                    <a href="login.php" class="text-white hover:underline mx-2">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Upload PDF File</h1>

        <!-- Feedback Message -->
        <?php
        if (isset($_SESSION['feedback']) && $_SESSION['feedback'] !== '') {
            $feedbackClass = strpos($_SESSION['feedback'], 'Success') === 0 ? 'text-green-500' : 'text-red-500';
            echo "<p class='$feedbackClass mb-4'>" . htmlspecialchars($_SESSION['feedback']) . "</p>";
            unset($_SESSION['feedback']); // Clear feedback after displaying
        }
        ?>

        <!-- Upload Form -->
        <?php if ($isLoggedIn): ?>
            <form action="upload.php" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6">
                <label for="pdf_file" class="block text-gray-700 font-bold mb-2">Choose a PDF file:</label>
                <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" class="border rounded-md p-2 w-full mb-4" required>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Upload</button>
            </form>
        <?php else: ?>
            <p class="text-gray-600">Please <a href="/05-auth-tailwind/login.php?redirect=<?= $currentUrl ?>" class="text-blue-500 hover:underline">log in</a> to upload files.</p>
        <?php endif; ?>
    </div>
</body>

</html>