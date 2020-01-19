<?php require_once('./backend/questions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Berkeley Purity Test</title>
		<link rel="stylesheet" href="./assets/css/style.css" />
		<link rel="shortcut icon" href="./favicon.ico" />

		<!-- meta tags -->
		<meta name="description" content='The Berkeley Purity Test is an unofficial purity test designed to satirize the "ideal" experience of a student at UC Berkeley, inspired by the Rice Purity Test. This website does not condone illegal activities, and it is strongly recommended that you do not aim to complete every item on this list.' />
		<meta name="copyright"content="Berkeley Purity Test">
		<meta name="url" content="https://berkeleypuritytest.com">
	</head>
	<body>
		<!-- header -->
		<div id="header">
			<h1>Berkeley Purity Test</h1>
			<p><em>The Berkeley Purity Test is an unofficial purity test designed to satirize the "ideal" experience of a student at UC Berkeley, inspired by the <a href="http://ricepuritytest.com/" target="_blank">Rice Purity Test</a>. This website does not condone illegal activities, and it is strongly recommended that you do not aim to complete every item on this list.</em></p>
			<p id="instructions"><b>Instructions:</b> Prefix each question with "have you ever..." and check every box that you have completed.</p>
		</div>

		<!-- questions -->
		<div id="questions">
			<ol id="questions-ol">
				<?php foreach ($questions as $index => $question) { ?>
					<li>
						<input type="checkbox" id="<?php echo $index; ?>" />
						<?php echo $question; ?>
					</li>
				<?php } ?>
			</ol>
			<center>
				<button id="submit">Calculate My Score!</button>
			</center>
		</div>

		<!-- score -->
		<div id="score">
			<h1>Your Score:</h1>
			<h1 id="score-h1"></h1>
			<p>Want to view statistics about other peoples' scores?<br>Go like our <a href="https://www.facebook.com/berkeleypuritytest" target="_blank">Facebook page</a>!
		</div>

		<!-- terms of service -->
		<div id="terms">
			<h2>Terms of Service</h2>
			<p>Please read these Terms of Service ("Terms", "Terms of Service", "Terms of Use") carefully before using the site <a href="https://berkeleypuritytest.com">https://berkeleypuritytest.com</a> website (Berkeley Purity Test).</p>
			<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
			<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
			<h3>Tracking</h3>
			<p>We reserve the right to track your submission (which responses you checked) when you submit your score in order to keep anonymous statistics about our questions. In addition, we reserve the right to track your IP address every time you use this service in order to mitigate spam submissions that attempt to falsely alter our statistics.</p>
			<h3>Termination</h3>
			<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
			<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
			<h3>Governing Law</h3>
			<p>These Terms shall be governed and construed in accordance with the laws of the United States of America, without regard to its conflict of law provisions.</p>
			<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
			<h3>Changes</h3>
			<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. What constitutes a material change will be determined at our sole discretion.</p>
			<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
			<h3>Contact Us</h3>
			<p>If you have any questions about these Terms, please contact us at <a href="mailto:contact@berkeleypuritytest.com">contact@berkeleypuritytest.com</a>.</p>
		</div>

		<!-- footer -->
		<div id="footer">
			<p>
				To view what information we collect, please view our <a href="javascript:;" id="terms-link">terms of service</a>.
				<br>
				<b>Copyright &copy; <?php echo date('Y'); ?> Berkeley Purity Test</b>
			</p>
		</div>

		<script src="./assets/js/jquery.min.js"></script>
		<script src="./assets/js/bpt.js"></script>
	</body>
</html>
