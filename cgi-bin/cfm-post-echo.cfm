<!DOCTYPE html>
<html>
<head>
    <title>POST Message Body</title>
    <cfheader name="Cache-Control" value="no-cache">
    <cfcontent type="text/html">
</head>
<body>
    <h1 align="center">POST Message Body</h1>
    <hr>

    <cfif cgi.request_method EQ "POST">
        <cfset requestBody = ToString(getHttpRequestData().content)>

        <cfoutput>
            <p>Message Body: #requestBody#</p>
        </cfoutput>
    <cfelse>
        <p>Message Body: N/A</p>
    </cfif>
</body>
</html>
