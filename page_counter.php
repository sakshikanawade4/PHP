<?php
session_start(); // Start the session

// Initialize or update session counter
if (!isset($_SESSION['session_counter'])) {
    $_SESSION['session_counter'] = 1;
} else {
    $_SESSION['session_counter']++;
}

// Initialize or update cookie counter
if (!isset($_COOKIE['cookie_counter'])) {
    $cookie_counter = 1;
    setcookie('cookie_counter', $cookie_counter, time() + (86400 * 30), "/"); // Cookie expires in 30 days
} else {
    $cookie_counter = $_COOKIE['cookie_counter'] + 1;
    setcookie('cookie_counter', $cookie_counter, time() + (86400 * 30), "/");
}

// Display the counts
echo "<h1>Page Access Tracker</h1>";
echo "<p>Number of times this page has been accessed in this session: " . $_SESSION['session_counter'] . "</p>";
echo "<p>Number of times this page has been accessed overall (via cookie): " . $cookie_counter . "</p>";
?>