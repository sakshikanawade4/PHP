<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['product'] = [
        'prodName' => $_POST['prodName'],
        'qty' => $_POST['qty'],
        'rate' => $_POST['rate']
    ];
}

$customer = $_SESSION['customer'];
$product = $_SESSION['product'];
$total = $product['qty'] * $product['rate'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bill</title>
</head>
<body>
    <h2>Customer Bill</h2>
    <h3>Customer Information</h3>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($customer['name']); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($customer['addr']); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($customer['mobNo']); ?></p>
    
    <h3>Product Information</h3>
    <p><strong>Product Name:</strong> <?php echo htmlspecialchars($product['prodName']); ?></p>
    <p><strong>Quantity:</strong> <?php echo htmlspecialchars($product['qty']); ?></p>
    <p><strong>Rate:</strong> ₹<?php echo htmlspecialchars($product['rate']); ?></p>
    <p><strong>Total:</strong> ₹<?php echo htmlspecialchars($total); ?></p>
</body>
</html>
