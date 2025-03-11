<?php
header("Content-Type: application/json");

$filename = "contact.dat";
if (!file_exists($filename)) {
    echo json_encode([]);
    exit;
}

$contacts = [];
$file = fopen($filename, "r");

while (($line = fgets($file)) !== false) {
    $data = explode(",", trim($line));
    if (count($data) == 5) {
        $contacts[] = [
            "srno" => trim($data[0]),
            "name" => trim($data[1]),
            "residence" => trim($data[2]),
            "mobile" => trim($data[3]),
            "address" => trim($data[4])
        ];
    }
}

fclose($file);
echo json_encode($contacts);
?>
