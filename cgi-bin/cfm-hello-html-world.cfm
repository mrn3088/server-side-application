<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, ColdFusion!</title>
</head>
<body>
    <h1>Monster Team was here - Hello, ColdFusion!</h1>
    <p>This page was generated with the ColdFusion programming language</p>
    <cfset currentTime = DateFormat(Now(), "yyyy-mm-dd") & " " & TimeFormat(Now(), "HH:nn:ss")>
    <p>Current Time: <cfoutput>#currentTime#</cfoutput></p>
  
    <cfif CGI.HTTP_X_FORWARDED_FOR NEQ "">
        <cfset userIP = CGI.HTTP_X_FORWARDED_FOR>
    <cfelse>
        <cfset userIP = CGI.REMOTE_ADDR>
    </cfif>
    <p>Your IP Address: <cfoutput>#userIP#</cfoutput></p>



</body>
</html>
