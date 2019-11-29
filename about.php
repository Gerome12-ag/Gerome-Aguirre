<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
<div class="wrapper">
	<div class="boxx">
		<div class="header">
			<h1>Contact Us</h1>
			<p>
				Let us know if you are encountering some issues or bugs in our website. It's our pleasure to serve you!<br> Lets EmpowerIT for the next generation.
			</p>
			<hr>
			

		</div>
		<form method="post">
		<input type="text" name="word" placeholder="Name">
		<input type="text" name="word" placeholder="Email">
		<br>

		<input class="message" type="text" name="word" placeholder="Message">
		<br>
		<hr>
		<button style="margin-left: 470px; font-family:calibri;" name="send">SEND</button>
		<button><a href="web.php" style="text-decoration: none; color: black; font-family:calibri;">Home</a></button>
		</form>
		<br>
	<div style="color:white; text-align: center; font-size: 30px;">
	<?php
		if(isset($_POST['send'])){
			$send=$_POST['send'];
			echo 'Thank You for Visiting';
		}

	?>
	</div>
	</div>


</div>
</body>
</html>