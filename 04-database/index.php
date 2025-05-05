<?php
include './db.php';

// Handle the "Generate Random Student" action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['generate'])) {
    $random_nim = rand(100000, 999999);
    $sql = "INSERT INTO students (name, nim) VALUES 
            ('Bambang', $random_nim), 
            ('Paijo', $random_nim + 1);";
    $db->exec($sql);
    header('Location: index.php'); // Refresh the page to show updated data
    exit;
}

// Handle the "Remove Student" action
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    $nim = $_POST['nim'];
    $stmt = $db->prepare("DELETE FROM students WHERE nim = :nim");
    $stmt->execute(['nim' => $nim]);
    header('Location: index.php'); // Refresh the page to show updated data
    exit;
}

// Fetch all students from the database
$sql = "SELECT name, nim FROM students";
$students = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4 px-6 items-center">
        <a href="/">
            <header class="bg-gray-800 text-white text-center">
                <h1 class="text-2xl font-bold">Pemrograman Aplikasi Web</h1>
            </header>
        </a>
    </header>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4 text-center">Students Data</h1>
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                Success: Random students have been generated and added to the database.
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'unique_nim_failed'): ?>
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                Error: Failed to generate unique NIM after multiple attempts. Please try again.
            </div>
        <?php endif; ?>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-600">#</th>
                        <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-600">Name</th>
                        <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-600">NIM</th>
                        <th class="py-2 px-4 bg-gray-200 text-left text-sm font-bold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $index => $student): ?>
                            <tr class="border-b">
                                <td class="py-2 px-4 text-sm text-gray-700"><?php echo $index + 1; ?></td>
                                <td class="py-2 px-4 text-sm text-gray-700"><?php echo htmlspecialchars($student['name']); ?></td>
                                <td class="py-2 px-4 text-sm text-gray-700"><?php echo htmlspecialchars($student['nim']); ?></td>
                                <td class="py-2 px-4 text-sm text-gray-700">
                                    <form action="remove_handler.php" method="POST" class="inline">
                                        <input type="hidden" name="nim" value="<?php echo htmlspecialchars($student['nim']); ?>">
                                        <button type="submit" name="remove" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="py-4 px-4 text-center text-gray-500">No students found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <!-- Generate Random Student Button -->
        <form action="generate_handler.php" method="POST" class="flex justify-end mt-4">
            <button type="submit" name="generate" class="bg-blue-500 text-white py-2 px-4 rounded-md shadow-lg hover:bg-blue-600">
                Generate Random Students
            </button>
        </form>
    </div>
</body>

</html>