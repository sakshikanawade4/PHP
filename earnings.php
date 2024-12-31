<!-- earnings.php -->
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save employee details in session
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Earnings</title>
</head>
<body>
    <form action="summary.php" method="post">
        <h2>Earnings</h2>
        <label for="basic">Basic:</label>
        <input type="number" name="basic" id="basic" required><br><br>

        <label for="da">DA:</label>
        <input type="number" name="da" id="da" required><br><br>

        <label for="hra">HRA:</label>
        <input type="number" name="hra" id="hra" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
