<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=contacts;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $sql = 'SELECT first, last FROM contacts ORDER BY first';
    foreach ($conn->query($sql) as $row) {
        print $row['first'] . "\t";
        print $row['last'] . "\n";
    }
?>
