<?php
// Create a DOMDocument instance
$dom = new DOMDocument("1.0", "UTF-8");

// Create the root element
$root = $dom->createElement("Items");
$dom->appendChild($root);

// Define the items data
$items = [
    ["ItemName" => "Laptop", "ItemPrice" => "60000", "Quantity" => "2"],
    ["ItemName" => "Mobile", "ItemPrice" => "20000", "Quantity" => "5"],
    ["ItemName" => "Headphones", "ItemPrice" => "3000", "Quantity" => "10"],
    ["ItemName" => "Keyboard", "ItemPrice" => "1500", "Quantity" => "8"],
    ["ItemName" => "Mouse", "ItemPrice" => "800", "Quantity" => "15"]
];

// Add each item to the XML structure
foreach ($items as $item) {
    $itemElement = $dom->createElement("Item");

    $itemName = $dom->createElement("ItemName", $item["ItemName"]);
    $itemElement->appendChild($itemName);

    $itemPrice = $dom->createElement("ItemPrice", $item["ItemPrice"]);
    $itemElement->appendChild($itemPrice);

    $quantity = $dom->createElement("Quantity", $item["Quantity"]);
    $itemElement->appendChild($quantity);

    $root->appendChild($itemElement);
}

// Save the XML to a file
$dom->formatOutput = true;
$dom->save("Item.xml");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Styled Items</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    // Load and display the XML file
    $xml = simplexml_load_file("Item.xml");
    echo "<div class='items'>";
    foreach ($xml->Item as $item) {
        echo "<div class='item'>";
        echo "<div class='item-name'>Item Name: " . $item->ItemName . "</div>";
        echo "<div class='item-price'>Item Price: " . $item->ItemPrice . "</div>";
        echo "<div class='quantity'>Quantity: " . $item->Quantity . "</div>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</body>
</html>