<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bill</title>
</head>
<body>
    <h2>Bill for Customer: <?php echo htmlspecialchars($customer['name']); ?></h2>

    <h3>Customer Information:</h3>
    <p>Name: <?php echo htmlspecialchars($customer['name']); ?></p>
    <p>Address: <?php echo nl2br(htmlspecialchars($customer['address'])); ?></p>
    <p>Mobile: <?php echo htmlspecialchars($customer['mobile']); ?></p>

    <h3>Product Details:</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalBill = 0;
            foreach ($products as $product) {
                $total = $product['qty'] * $product['rate'];
                $totalBill += $total;
                echo "<tr>
                        <td>" . htmlspecialchars($product['prod_name']) . "</td>
                        <td>" . htmlspecialchars($product['qty']) . "</td>
                        <td>" . htmlspecialchars($product['rate']) . "</td>
                        <td>" . number_format($total, 2) . "</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Total Bill: <?php echo number_format($totalBill, 2); ?></h3>

    <br><br>
    <a href="customer_form.php">New Customer</a> | <a href="product_form.php">Add More Products</a>
</body>
</html>
