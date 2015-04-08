<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

if (isset($_POST)) {
	$resource = fopen('./tmp.data', '+w');
	fwrite($resource, print_r($_POST), true) . '<br />');
	fclose($resource);
} else {
	$data = file_get_contents('./tmp.data', true);
	print_r($data);
}

?>

