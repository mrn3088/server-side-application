<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 2</title>
</head>
<body>
    <h1>CF Sessions Page 2</h1>
    <cfset cookieExists = false>
    <cfif structKeyExists(cookie, "username")>
        <cfset cookieExists = true>
        <cfset username = cookie.username>
    <cfelse>
        <cfset username = "">
    </cfif>

    <cfoutput>
        <p><b>Username:</b> #username#</p>
        <br/><br/>
        <a href="/cfm-sessions-1.cfm">Session Page 1</a><br/>
        <a href="/cfm-destroy-session.cfm">Destroy Session</a><br/>
    </cfoutput>
</body>
</html>
