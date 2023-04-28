<!DOCTYPE html>
<html>
<head>
	<title>GET Request Data</title>
</head>
<body>
	<h1>GET Query String</h1>
    <hr>
	<p>The following data was retrieved from the query string:</p>
	<ul>
		<?php 
        foreach ($_GET as $key => $value) {
			echo '<li>' . $key . ': ' . $value . '</li>';
		}
        ?>
	</ul>
</body>
</html>
