<?php
session_start();

// Check if customer data exists in the session
if (!isset($_SESSION['customer'])) {
    header('Location: customer_form.php'); // Redirect to customer form if no data exists
    exit();
}

// Check if product data is being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Initialize product data in session if it does not exist
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
    }

    // Store the new product information
    $_SESSION['products'][] = [
        'prod_name' => $_POST['prod_name'],
        'qty' => $_POST['qty'],
        'rate' => $_POST['rate']
    ];

    // Redirect to the bill page after product entry
    header('Location: bill.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Form</title>
</head>
<body>
    <h2>Enter Product Information</h2>
    <form method="POST" action="product_form.php">
        <label for="prod_name">Product Name:</label>
        <input type="text" id="prod_name" name="prod_name" required><br><br>
        
        <label for="qty">Quantity:</label>
        <input type="number" id="qty" name="qty" required><br><br>
        
        <label for="rate">Rate:</label>
        <input type="number" step="0.01" id="rate" name="rate" required><br><br>
        
        <input type="submit" value="Add Product">
    </form>

    <br><br>
    <a href="bill.php">Generate Bill</a>
</body>
</html>
