<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

if (isset($_POST) and $_POST) {
	$resource = fopen(__DIR__ . '/data.php', 'a+');
	fwrite($resource, print_r($_POST, true) . '<br />');
	fclose($resource);
} else {
	$data = file_get_contents(__DIR__ . '/data.php', true);
	print_r($data);
}

?>

