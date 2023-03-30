<?php
  
header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "xss";
$password = "1234";
$dbname = "attackxss";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM `pwned` ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}


$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($rows);

mysqli_close($conn);

?>
