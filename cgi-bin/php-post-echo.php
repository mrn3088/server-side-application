<!DOCTYPE html>
<html>
<head>
	<title>POST Request Data</title>
</head>
<body>
	<h1>POST Message Body</h1>
    <hr>
	<p>The following data was retrieved from the message body:</p>
	<ul>
		<?php 
        foreach ($_POST as $key => $value) {
			echo '<li>' . $key . ': ' . $value . '</li>';
		}
        ?>
	</ul>
</body>
</html>
