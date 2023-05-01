<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 1</title>
</head>
<body>
    <h1>CF Sessions Page 1</h1>
    <cfset username = url.username>

    <p><b>Username:</b> #username#</p>
    <br/><br/>
    <a href="/cfm-sessions-2.cfm?username=#encodeForURL(username)#">Session Page 2</a><br/>
    <a href="/cfm-cgiform.html">CF CGI Form</a><br />
    <form style="margin-top:30px" action="/cf-destroy-session.cfm" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
