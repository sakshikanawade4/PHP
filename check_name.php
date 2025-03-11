<?php
if (isset($_GET['name'])) {
    $name = trim($_GET['name']);
    
    if ($name == "") {
        echo "Stranger, please tell me your name!";
    } else {
        $masters = ["Rohit", "Virat", "Dhoni", "Ashwin", "Harbhajan"];
        
        if (in_array($name, $masters)) {
            echo "Hello, master " . htmlspecialchars($name) . "!";
        } else {
            echo htmlspecialchars($name) . ", I don’t know you!";
        }
    }
}
?>
