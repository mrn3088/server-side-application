
<?php
    $data = array(
        'title' => 'Hello, php!',
        'heading' => 'hello, php!',
        'date' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'message' => 'This page was generated with the PHP programming language'
    );

    header('Content-Type: application/json');
    header('Cache-Control: no-cache');
    echo json_encode($data);
?>
