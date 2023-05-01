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
        <cfset parsed_username = ListGetAt(cookie.username, 2, ";")>
        <p><b>Username:</b> #parsed_username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>
    
    <a href="cfm-sessions-2.cfm">Session Page 2</a><br/>
    <a href="../cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a>
</body>
</html>
