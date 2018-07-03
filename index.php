<?php
$ch = curl_init('https://upload.wikimedia.org/wikipedia/commons/6/6d/The_Garden_of_Earthly_Delights_by_Bosch_High_Resolution.jpg');
$fp = fopen('./img6.jpg', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);