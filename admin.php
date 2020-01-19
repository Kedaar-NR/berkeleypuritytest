<?php require_once('./backend/questions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Berkeley Purity Test &bull; Admin</title>
		<link rel="stylesheet" href="./assets/css/admin.css" />
		<link rel="shortcut icon" href="./favicon.ico" />

		<!-- meta tags -->
		<meta name="description" content='The Berkeley Purity Test is an unofficial purity test designed to satirize the "ideal" experience of a student at UC Berkeley, inspired by the Rice Purity Test. This website does not condone illegal activities, and it is strongly recommended that you do not aim to complete every item on this list.' />
		<meta name="copyright"content="Berkeley Purity Test">
		<meta name="url" content="https://berkeleypuritytest.com">
	</head>
	<body>
		<?php
		if (isset($_POST['email'])
				&& isset($_POST['password'])
				&& $_POST['email'] == 'contact@berkeleypuritytest.com'
				&& md5($_POST['password']) == '5f1a55e8a38cc40ba1e3fbf359f7057e') {
			require_once("./backend/conf.ini.php");
			require_once("./backend/questions.php");
			require_once("./backend/stats/queries.php");
			?>
			<h1>Stats</h1>
			<ul>
				<?php
				foreach ($answers as $question => $answer) {
					echo "<li><b>$question</b>: $answer</li>";
				}
				?>
			</ul>
			<?php
		} else {
		?>
		<form action="./admin.php" method="POST">
			<h1>Berkeley Purity Test</h1>
			<h2>Log In</h2>
			<input name="email" type="email" placeholder="email" />
			<input name="password" type="password" placeholder="password" />
			<input type="submit" />
		</form>
		<?php
		}
		?>
	</body>
</html>
