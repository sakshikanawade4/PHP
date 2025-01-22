<?php
session_start();

// Check if form is submitted and store customer information in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['customer'] = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'mobile' => $_POST['mobile']
    ];
    header('Location: product_form.php'); // Redirect to product form
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Form</title>
</head>
<body>
    <h2>Enter Customer Information</h2>
    <form method="POST" action="customer_form.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br><br>
        
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>
        
        <input type="submit" value="Next">
    </form>
</body>
</html>
