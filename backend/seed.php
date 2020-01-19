<?php
// Seed database. Usage: php seed.php
require_once('./conf.ini.php');

$sql = "CREATE TABLE responses (";
for ($index = 0; $index < 100; $index ++) {
	$sql .= "q$index INT(1)";
	$sql .= ($index == 99) ? ", score INT(3));" : ", ";
}

mysqli_query($connection, $sql);
echo mysqli_error($connection);
