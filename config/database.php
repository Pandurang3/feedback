<?php
//mysqli format

// define('DB_HOST', 'localhost');
// define('DB_USER', 'pandurang');
// define('DB_PASS', '123456');
// define('DB_NAME', 'php_dev');

//create connection
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
// if($conn->connect_error){
//     die('Connrction Failed ' . $conn->connect_error);
// }
// echo 'CONNECTED!';

// PDO format

$dbHost = 'localhost';
$dbName = 'php_dev';
$dbUser = 'pandurang';
$dbPassword = '123456';

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connected Successfully";
} catch (Exception $e) {
    echo "Connection failed" . $e->getMessage();
}

?>