<?php
header("Content-Type: application/json");
$conn = new mysqli("localhost", "username", "password", "database_name");

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT * FROM reports";
$result = $conn->query($sql);
$reports = [];

while ($row = $result->fetch_assoc()) {
    $reports[] = $row;
}

echo json_encode($reports);
$conn->close();
?>
