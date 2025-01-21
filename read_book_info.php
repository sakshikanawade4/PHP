<?php
// Load the XML file into a SimpleXML object
$xml = simplexml_load_file("BookInfo.xml");

if ($xml === false) {
    echo "Failed to load XML file.";
    foreach (libxml_get_errors() as $error) {
        echo "\n", $error->message;
    }
    exit;
}

// Display the XML data
echo "<h1>Book Information</h1>";
foreach ($xml->book as $book) {
    echo "<div style='margin-bottom: 20px;'>";
    echo "<strong>Book Number:</strong> " . $book->bookno . "<br>";
    echo "<strong>Book Name:</strong> " . $book->bookname . "<br>";
    echo "<strong>Author Name:</strong> " . $book->authorname . "<br>";
    echo "<strong>Price:</strong> " . $book->price . "<br>";
    echo "<strong>Year:</strong> " . $book->year . "<br>";
    echo "</div>";
}
?>
