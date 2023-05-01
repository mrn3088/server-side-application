<!DOCTYPE html>
<html>
<head>
    <title>CF Sessions Page 1</title>
</head>
<body>
    <h1>CF Sessions Page 1</h1>
    <cfparam name="url.username" default="">

    <cfoutput>
        <p><b>Username:</b> #url.username#</p>
        <br/><br/>
        <a href="/cgi-bin/cfm-sessions-2.cfm?username=#urlEncodedFormat(url.username)#">Session Page 2</a><br/>
    </cfoutput>
</body>
</html>
