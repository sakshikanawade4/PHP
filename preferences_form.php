<?php
// If form is submitted, set cookies for the preferences
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie('font_style', $_POST['font_style'], time() + (86400 * 30), "/"); // 30 days expiration
    setcookie('font_size', $_POST['font_size'], time() + (86400 * 30), "/");
    setcookie('font_color', $_POST['font_color'], time() + (86400 * 30), "/");
    setcookie('background_color', $_POST['background_color'], time() + (86400 * 30), "/");

    // Redirect to the second page
    header("Location: display_preferences.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Preferences</title>
</head>
<body>
    <h1>Select Your Preferences</h1>
    <form method="POST" action="preferences_form.php">
        <label for="font_style">Font Style:</label>
        <select name="font_style" id="font_style">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Courier New">Courier New</option>
        </select><br><br>

        <label for="font_size">Font Size:</label>
        <select name="font_size" id="font_size">
            <option value="14px">14px</option>
            <option value="18px">18px</option>
            <option value="22px">22px</option>
        </select><br><br>

        <label for="font_color">Font Color:</label>
        <input type="color" name="font_color" id="font_color"><br><br>

        <label for="background_color">Background Color:</label>
        <input type="color" name="background_color" id="background_color"><br><br>

        <input type="submit" value="Save Preferences">
    </form>
</body>
</html>
