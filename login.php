<?php
session_start();

// Predefined credentials
$correctUsername = "admin";
$correctPassword = "password123";

// Initialize login attempts
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Increment login attempts
    $_SESSION['attempts']++;

    // Check credentials
    if ($username === $correctUsername && $password === $correctPassword) {
        // Reset attempts on success
        $_SESSION['attempts'] = 0;
        $_SESSION['loggedin'] = true;
        echo "<h1>Welcome, $username!</h1>";
        echo "<form><button type='submit'>Proceed</button></form>";
        exit;
    } else {
        echo "<p>Incorrect username or password. Attempt {$_SESSION['attempts']} of 3.</p>";
    }

    // Lock out after 3 failed attempts
    if ($_SESSION['attempts'] >= 3) {
        echo "<p>Too many failed attempts. Please try again later.</p>";
        session_destroy(); // Clear session to reset attempts after lockout
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>