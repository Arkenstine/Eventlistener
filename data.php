<?php
// Read and display the JSON data from the file (e.g., data.json)
$data = file_get_contents('data.json');
$jsonArray = explode(PHP_EOL, $data);

foreach ($jsonArray as $json) {
  if (!empty($json)) {
    $entry = json_decode($json, true);
    echo "Name: " . $entry['name'] . "<br>";
    echo "Phone Number: " . $entry['phone'] . "<br>";
    echo "Email: " . $entry['email'] . "<br><br>";
  }
}
?>
