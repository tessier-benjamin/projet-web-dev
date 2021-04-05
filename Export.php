<?php

$_GET['couple'] = str_replace(" ","+",$_GET['couple']);
$file = 'Export.txt';
$current = $_GET['couple'];
file_put_contents($file, $current);
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header("Content-Type: text/plain");
readfile($file);


