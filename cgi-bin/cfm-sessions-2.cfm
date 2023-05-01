<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 2</title>
</head>
<body>
    <h1>CF Sessions Page 2</h1>
    <cfparam name="url.username" default="">

    <cfoutput>
        <p><b>Username:</b> #url.username#</p>
        <br/><br/>
        <a href="/cgi-bin/cfm-sessions-1.cfm?username=#urlEncodedFormat(url.username)#">Session Page 1</a><br/>
        <a href="/cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a><br/>
    </cfoutput>
</body>
</html>
