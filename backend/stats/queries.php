<?php
// Get the queries we want
$queries = json_decode(file_get_contents("./backend/stats/queries.json"), true);

// Create a temporary sum table
// mysqli_query($connection, "CREATE TABLE totals (question INT(3), total INT);");
// for ($index = 0; $index < 100; $index ++) {
// 	mysqli_query($connection, "INSERT INTO totals SELECT $index, SUM(q$index) FROM responses;");
// }

// Populate the answers
$answers = [];
foreach ($queries as $description => $query) {
	$answer = mysqli_fetch_array(mysqli_query($connection, $query))[0];
	$answers[$description] = $answer;
}

// Delete temporary sum table
// mysqli_query($connection, "DROP TABLE totals;");
