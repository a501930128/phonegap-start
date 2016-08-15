<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 
"127.0.0.1/?action=snapshot");  
curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch); 

$file_size=count($output); 
Header("Content-type: image/jpeg"); 

Header("Accept-Ranges: bytes"); 
Header("Accept-Length:".$file_size); 

echo $output;
?>
