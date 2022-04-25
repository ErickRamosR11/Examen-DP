<?php
$tennis = $_POST['data'];
$file = fopen("Respuesta1.json", "w");
fwrite($file,$tennis);
fclose($file);
//print_r($tennis);exit;
?>