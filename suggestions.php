<?php
// Array of suggestions
$suggestions = ["Apple", "Amazon", "Adobe", "Android", "Airbnb", "Alibaba", "Alphabet", 
                "Microsoft", "Meta", "Mozilla", "Netflix", "Nokia", "NASA", "Nestle", 
                "Samsung", "Sony", "Spotify", "Snapchat", "Slack", "Siemens"];

if (isset($_GET['query'])) {
    $query = strtolower(trim($_GET['query']));
    $matches = [];

    if (!empty($query)) {
        foreach ($suggestions as $word) {
            if (stripos($word, $query) === 0) {  // Match from the beginning
                $matches[] = $word;
            }
        }
    }

    echo json_encode($matches);
}
?>
