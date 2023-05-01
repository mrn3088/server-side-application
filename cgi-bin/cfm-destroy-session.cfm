<!DOCTYPE html>
<html>
<head>
    <title>Session Destroyed</title>
</head>
<body>
    <h1>CF Session Destroyed</h1>

    <cfif structKeyExists(cookie, "username")>
        <cfcookie name="username" value="" expires="now">
    </cfif>

    <a href="/cfm-sessions-1.cfm">Back to Page 1</a>
    <br />
    <a href="/cfm-sessions-2.cfm">Back to Page 2</a>
    <br />
    <a href="/cgi-form/cfm-cgiform.html">CFM CGI Form</a>
</body>
</html>