<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "fcc";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=utf8", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $error) {
    echo "Connection Failed: ".$error->getMessage();
}

function clean($string) {
    return strip_tags(addslashes(stripslashes(htmlspecialchars(trim($string)))));
}

?>