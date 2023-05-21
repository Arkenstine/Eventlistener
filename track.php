<?php
// Get the JSON data
$data = file_get_contents('php://input');

// Save the JSON data to a file (e.g., data.json)
$file = 'data.json';
$currentData = file_get_contents($file);
$currentData .= $data . PHP_EOL;
file_put_contents($file, $currentData);
?>
