<?php
// Retrieve cookie values and display them if set
$font_style = isset($_COOKIE['font_style']) ? $_COOKIE['font_style'] : 'Not set';
$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : 'Not set';
$font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : 'Not set';
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'Not set';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Preferences</title>
</head>
<body>
    <h1>Your Selected Preferences</h1>
    <p>Font Style: <?php echo htmlspecialchars($font_style); ?></p>
    <p>Font Size: <?php echo htmlspecialchars($font_size); ?></p>
    <p>Font Color: <span style="color: <?php echo htmlspecialchars($font_color); ?>;"><?php echo htmlspecialchars($font_color); ?></span></p>
    <p>Background Color: <span style="background-color: <?php echo htmlspecialchars($background_color); ?>;"><?php echo htmlspecialchars($background_color); ?></span></p>

    <a href="apply_preferences.php">Go to the third page with your preferences applied</a>
</body>
</html>