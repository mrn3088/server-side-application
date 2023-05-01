<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 2</title>
</head>
<body>
    <h1>CF Sessions Page 2</h1>
    <cfif structKeyExists(url, "username")>
        <cfset username = url.username>
    <cfelse>
        <cfset username = "">
    </cfif>

    <p><b>Username:</b> #username#</p>
    <br/><br/>
    <a href="/cfm-sessions-1.cfm?username=#encodeForURL(username)#">Session Page 1</a><br/>
    <a href="/cfm-cgiform.html">CF CGI Form</a><br />
    <form style="margin-top:30px" action="/cf-destroy-session.cfm" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
