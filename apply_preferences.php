<?php
// Retrieve cookie values to apply styles
$font_style = isset($_COOKIE['font_style']) ? $_COOKIE['font_style'] : 'Arial';
$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '14px';
$font_color = isset($_COOKIE['font_color']) ? $_COOKIE['font_color'] : '#000000';
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#FFFFFF';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Preferences</title>
    <style>
        body {
            font-family: <?php echo htmlspecialchars($font_style); ?>;
            font-size: <?php echo htmlspecialchars($font_size); ?>;
            color: <?php echo htmlspecialchars($font_color); ?>;
            background-color: <?php echo htmlspecialchars($background_color); ?>;
        }
    </style>
</head>
<body>
    <h1>Your Preferences Are Applied</h1>
    <p>This page is displayed with the preferences you selected earlier.</p>
</body>
</html>
