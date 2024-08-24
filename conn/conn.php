<?php 
$servername = "localhost";
$username = "root";
$password = "ServerPassword001";
$dbname = "image_gallery_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Aw gg". $e->getMessage() ."";
}

?>