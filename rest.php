<?php
header("Content-Type: application/json");

$data = array(); // Temporary data storage. Replace this with your database.

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($data);
}
?>
