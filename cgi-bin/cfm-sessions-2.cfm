<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 2</title>
</head>
<body>
    <h1>CF Sessions Page 2</h1>
    <cfif IsDefined("cgi.query_string") AND ListLen(cgi.query_string, "=") GT 0>
        <cfset username = ListLast(cgi.query_string, "=")>
        <p><b>Username:</b> #username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>

    <p>
        <a href="cfm-sessions-1.cfm?username=#username#">Session Page 1</a><br>
        <a href="../cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a>
    </p>
</body>
</html>
