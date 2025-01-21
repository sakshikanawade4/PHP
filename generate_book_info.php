<?php
// Create a DOMDocument instance
$dom = new DOMDocument("1.0", "UTF-8");

// Create the root element
$root = $dom->createElement("BookInfo");
$dom->appendChild($root);

// Define the books data
$books = [
    ["bookno" => "1", "bookname" => "JAVA", "authorname" => "Balguru Swami", "price" => "250", "year" => "2006"],
    ["bookno" => "2", "bookname" => "C", "authorname" => "Denis Ritchie", "price" => "500", "year" => "1971"]
];

// Add each book to the XML structure
foreach ($books as $book) {
    $bookElement = $dom->createElement("book");

    $bookNo = $dom->createElement("bookno", $book["bookno"]);
    $bookElement->appendChild($bookNo);

    $bookName = $dom->createElement("bookname", $book["bookname"]);
    $bookElement->appendChild($bookName);

    $authorName = $dom->createElement("authorname", $book["authorname"]);
    $bookElement->appendChild($authorName);

    $price = $dom->createElement("price", $book["price"]);
    $bookElement->appendChild($price);

    $year = $dom->createElement("year", $book["year"]);
    $bookElement->appendChild($year);

    $root->appendChild($bookElement);
}

// Save the XML to a file
$dom->formatOutput = true;
$dom->save("BookInfo.xml");

echo "XML file 'BookInfo.xml' created successfully.";
?>
