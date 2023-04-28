<!DOCTYPE html>
<html>
    <head>
        <title>Environment Variables</title>
    </head>
    <body><h1 align="center">Environment Variables</h1>
        <hr>
        <?php
        foreach ($_ENV as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
        // foreach ($_SERVER as $key => $value) {
        //     echo $key . ': ' . $value . '<br>';
        // }

        // foreach (getallheaders() as $key => $value) {
        //     echo $key . ': ' . $value . '<br>';
        // }
        ?>

    </body>
</html>