<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions</title>
</head>
<body>
    <h1>CF Sessions Page 1</h1>
    <cfif IsDefined("url.username")>
        <cfset cookie.username = url.username>
    </cfif>

    <cfif IsDefined("cookie.username")>
        <p><b>Username:</b> #cookie.username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>
    
    <a href="cfm-sessions-2.cfm">Session Page 2</a><br/>
    <a href="cfm-cgiform.html">Back to CFM CGI Form</a>
</body>
</html>
