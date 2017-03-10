<?php
include_once 'class.crud.php';

error_reporting(E_ALL);

if (!ini_get('display_errors')) {
 ini_set('display_errors', 1);
}

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
$DB_name = "contacts";

try {
    $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

  $crud = new crud($conn);
?>
