<?php

$path = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

// Variables
$product_name = "OpenCart 3";
$product_desc = "Documentation";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = filter_input(INPUT_GET, 'lang', FILTER_SANITIZE_STRING);
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
	$section_param = filter_input(INPUT_GET, 'section', FILTER_SANITIZE_STRING);
}
if (isset($_GET['utm_campaign'])) {
	header('Location: index.php');
}