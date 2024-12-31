<?php
// Connection parameters
$host = "localhost";
$port = "5432";
$dbname = "mydb";
$user = "postgres";
$password = "sakshi";

// Connection string
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Connect to PostgreSQL
$conn = pg_connect($connection_string);

// Check connection
if ($conn) {
    echo "Connected to PostgreSQL successfully!";
} else {
    echo "Failed to connect to PostgreSQL.";
}
?>