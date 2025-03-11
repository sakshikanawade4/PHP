<?php
if (isset($_GET['title'])) {
    $title = $_GET['title'];

    $xml = simplexml_load_file("books.xml");
    $response = [];

    foreach ($xml->book as $book) {
        if ((string) $book->title == $title) {
            $response = [
                "title" => (string) $book->title,
                "author" => (string) $book->author,
                "year" => (string) $book->year,
                "price" => (string) $book->price
            ];
            break;
        }
    }

    echo json_encode($response);
}
?>
