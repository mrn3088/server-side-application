
<?php
    $data = array(
        'title' => 'Hello, php!',
        'heading' => 'hello, php!',
        'message' => 'This page was generated with the PHP programming language'
    );

    header('Content-Type: application/json');
    header('Cache-Control: no-cache');
    echo json_encode($data);
?>
