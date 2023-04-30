<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, ColdFusion!</title>
</head>
<body>
    <h1>Monster Team was here - Hello, ColdFusion!</h1>
    <p>This page was generated with the ColdFusion programming language</p>

    <!-- Get the current date and time -->
    <cfset currentDateTime = now()>

    <!-- Get the user's IP address -->
    <cfset userIP = cgi.REMOTE_ADDR>

    <p>Current Time: #DateFormat(currentDateTime, "yyyy-MM-dd")# #TimeFormat(currentDateTime, "HH:mm:ss")#</p>
    <p>Your IP Address: #userIP#</p>
</body>
</html>
