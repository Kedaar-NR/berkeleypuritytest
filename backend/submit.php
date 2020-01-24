<?php
require_once('./conf.ini.php');

if (!isset($_POST['data']) || !isset($_POST['score'])) {
	die("please don't try to hack ~ I'm cool if you investigate the code but don't send false submission please! I'll eventually find out and it'll be unnecessary work for both of us :(");
}

$ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : "none";
$data = $_POST['data'];
$score = $_POST['score'];

// Make sure score is legit, also delete scores <= 0
if ($score <= 0 || $score > 100) {
	die();
}

$sum = 100;
$sql = "INSERT INTO responses VALUES (";
foreach ($data as $index => $checked) {
	// Make sure the data is sanitized
	if (!is_int($index) || ($checked != 0 && $checked != 1)) {
		die();
	}

	$sum -= $checked;

	$sql .= $checked;
	$sql .= ($index == 99) ? ", $score, '$ip');" : ", ";
}

if ($sum != $score) {
	die();
}

mysqli_query($connection, $sql);
?>
