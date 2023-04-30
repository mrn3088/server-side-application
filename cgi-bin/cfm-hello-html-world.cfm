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


    <p>Current Time: <cfoutput>#TimeFormat(Now(), "hh:mm:ss tt")#</cfoutput></p>
    <p>Your IP Address: <cfoutput>#CGI.REMOTE_ADDR#</cfoutput></p>
    
</body>
</html>
