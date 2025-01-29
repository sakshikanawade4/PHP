<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Information</title>
</head>
<body>
    <h2>Enter Customer Information</h2>
    <form action="product.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="addr">Address:</label>
        <input type="text" id="addr" name="addr" required><br><br>
        
        <label for="mobNo">Mobile Number:</label>
        <input type="text" id="mobNo" name="mobNo" required><br><br>
        
        <button type="submit">Next</button>
    </form>
</body>
</html>
