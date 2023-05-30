<?php
  $filePath = 'data.json'; // Path to the JSON file

  $data = file_get_contents($filePath); // Load existing data from the JSON file
  $data = json_decode($data, true); 
  
  $postData = file_get_contents('php://input'); 
  $postData = json_decode($postData, true); 
  
  if (!empty($postData)) {
    $data[] = $postData; 
  
    $jsonData = json_encode($data); 
  
    file_put_contents($filePath, $jsonData); // Save the JSON data to the file
  }
?>
