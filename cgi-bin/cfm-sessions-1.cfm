<html>
    <head>
        <title>CF Sessions</title>
    </head>
    <body>
        <h1>CF Sessions Page 1</h1>
        <cfif isDefined("url.username")>
            <cfcookie name="username" value="#url.username#" />
        </cfif>
        
        <cfif isDefined("cookie.username")>
            <p><b>Username:</b> #cookie.username#</p>
        <cfelse>
            <p><b>Username:</b> No username set</p>
        </cfif>

        <a href="/cgi-bin/cfm-sessions-2.cfm">Session Page 2</a><br />
        <a href="/cfm-cgiform.html">Back to CFM CGI Form</a>
    </body>
</html>
