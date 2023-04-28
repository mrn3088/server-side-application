<!DOCTYPE html>
<html>
<head>
	<title>General Request</title>
</head>
<body>
	<h1>POST Message Body</h1>
    <hr>
	<p>The following data was retrieved from the message body:</p>
	<ul>
    <?php
    $protocal = $_server['SERVER_PROTOCOL'];
    $query = $_server['QUERY_STRING'];
    $method = $_SERVER['REQUEST_METHOD'];
    $payload = json_encode($_POST);
    
    // // Get the request payload
    // if ($method == 'PUT' || $method == 'DELETE') {
    //     // Raw payload is only available for PUT and DELETE requests
    //     $payload = file_get_contents('php://input');
    // } else {
    //     // For other request methods, the payload is in the $_POST superglobal
    //     $payload = json_encode($_POST);
    // }

    // Output the request method and payload
    echo '<p><strong>HTTP Protocol:</strong> ' . $protocal . '</p>';
    echo '<p><strong>HTTP Method:</strong> ' . $method . '</p>';
    echo '<p><strong>Query String:</strong> ' . $query . '</p>';
    echo '<p><strong>Message Body:</strong> ' . $payload . '</p>';
    ?>
	</ul>
</body>
</html>
