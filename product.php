<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['customer'] = [
        'name' => $_POST['name'],
        'addr' => $_POST['addr'],
        'mobNo' => $_POST['mobNo']
    ];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Information</title>
</head>
<body>
    <h2>Enter Product Information</h2>
    <form action="bill.php" method="post">
        <label for="prodName">Product Name:</label>
        <input type="text" id="prodName" name="prodName" required><br><br>
        
        <label for="qty">Quantity:</label>
        <input type="number" id="qty" name="qty" required><br><br>
        
        <label for="rate">Rate:</label>
        <input type="number" id="rate" name="rate" step="0.01" required><br><br>
        
        <button type="submit">Generate Bill</button>
    </form>
</body>
</html>
