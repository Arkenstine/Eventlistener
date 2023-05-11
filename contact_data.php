<?php
$data = json_decode(file_get_contents('php://input'));

$file = fopen('data.json', 'w');
if (!$file) {
    http_response_code(500);
    exit('Unable to open file for writing.');
}

fwrite($file, json_encode($data));
fclose($file);

http_response_code(200);
