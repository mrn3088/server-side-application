<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 1</title>
</head>
<body>
    <h1>CF Sessions Page 1</h1>
    <cfif IsDefined("url.username")>
        <p><b>Username:</b> #url.username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>

    <p>
        <a href="cfm-sessions-2.cfm?username=#url.username#">Session Page 2</a><br>
        <a href="../cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a>
    </p>
</body>
</html>