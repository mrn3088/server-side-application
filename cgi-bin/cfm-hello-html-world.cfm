<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, ColdFusion!</title>
</head>
<body>
    <cfset currentDateTime = Now() />
    <cfset userIP = CGI.REMOTE_ADDR />
    
    <h1>Monster Team was here - Hello, ColdFusion!</h1>
    <p>This page was generated with the ColdFusion programming language</p>
    <p>Current Time: #DateFormat(currentDateTime, "yyyy-mm-dd")# #TimeFormat(currentDateTime, "HH:nn:ss")#</p>
    <p>Your IP Address: #userIP#</p>
</body>
</html>
