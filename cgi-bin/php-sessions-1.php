<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
        <h1>PHP Sessions Page 1</h1>
        <?php
        session_start();
        
        if (isset($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
        }

        if (isset($_COOKIE['PHPSESSID'])) {
            $cookie = $_COOKIE['PHPSESSID'];
            echo "<p><b>PHPSESSID:</b> $cookie</p>";
        } else {
            echo "<p><b>PHPSESSID:</b> No session exists</p>";
        }

        if ($_SESSION['username'] != "" || $_SESSION['username'] != null) {
            $name = $_SESSION['username'];
            echo "<p><b>Name:</b> $name</p>";
        } else {
            echo "<p><b>Name:</b> You do not have a name set</p>";
        }
        ?>
        <a href="/cgi-bin/php-sessions-2.php">Session Page 2</a>
        <a href="/cgi-form/php-cgiform.html">PHP CGI Form</a>
        <form style="margin-top:30px" action="/cgi-bin/php-destroy-session.php" method="get">
            <button type="submit">Destroy Session</button>
        </form>
    </body>
</html>