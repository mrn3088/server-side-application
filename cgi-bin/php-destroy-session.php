<html>
    <head>
        <title>Session Destroyed</title>
    </head>
    <body>
        <h1>PHP Session Destroyed</h1>

        <a href="/cgi-bin/php-sessions-1.php">Back to Page 1</a>
        <br />
        <a href="/cgi-bin/php-sessions-2.php">Back to Page 2</a>
        <br />
        <a href="/cgi-form/php-cgiform.html">PHP CGI Form</a>
        <?php
            session_start();
            session_destroy();
        ?>
    </body>
</html>