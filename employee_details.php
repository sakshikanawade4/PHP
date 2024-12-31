<!-- employee_details.php -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <form action="earnings.php" method="post">
        <h2>Employee Details</h2>
        <label for="eno">Employee Number:</label>
        <input type="text" name="eno" id="eno" required><br><br>

        <label for="ename">Employee Name:</label>
        <input type="text" name="ename" id="ename" required><br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br><br>

        <button type="submit">Next</button>
    </form>
</body>
</html>