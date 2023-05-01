<html>
    <head>
        <title>CF Sessions</title>
    </head>
    <body>
        <h1>CF Sessions Page 2</h1>
        
        <cfif isDefined("cookie.username")>
            <p><b>Username:</b> #cookie.username#</p>
        <cfelse>
            <p><b>Username:</b> No username set</p>
        </cfif>

        <a href="/cgi-bin/cfm-sessions-1.cfm">Session Page 1</a><br />
        <a href="/cfm-cgiform.html">Back to CFM CGI Form</a>
    </body>
</html>
