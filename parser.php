<?php
$data2 = file_get_contents('json2.json');
$decode = json_decode($data2, true);
echo "speed: ". $decode['json2']['speed']."\n";
echo "ip: ". $decode['json2']['ip'];
