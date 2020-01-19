<?php
// Scrape questions from questions.txt
$questions = explode("\n", file_get_contents("./backend/questions.txt"));
// Remove any empty rows
foreach ($questions as $index => $question) {
	if ($question == "") unset($questions[$index]);
}
?>
