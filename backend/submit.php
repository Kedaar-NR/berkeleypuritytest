<?php
require_once('./conf.ini.php');

if (!isset($_POST['data']) || !isset($_POST['score'])) {
	die("please don't try to hack ~ I'm cool if you investigate the code but don't send false submission please! I'll eventually find out and it'll be unnecessary work for both of us :(");
}

$data = $_POST['data'];
$score = $_POST['score'];
$sql = "INSERT INTO responses VALUES (";
foreach ($data as $index => $checked) {
	$sql .= $checked;
	$sql .= ($index == 99) ? ", $score);" : ", ";
}
mysqli_query($connection, $sql);
?>
