<!DOCTYPE html>
<html>
<head>
    <title>General Request Echo</title>
    <cfheader name="Cache-Control" value="no-cache">
    <cfcontent type="text/html">
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <hr>

    <cfoutput>
        <p><b>HTTP Protocol:</b> #cgi.server_protocol#</p>
        <p><b>HTTP Method:</b> #cgi.request_method#</p>
        <p><b>Query String:</b> #cgi.query_string#</p>
    </cfoutput>

    <cfif cgi.request_method EQ "POST" OR cgi.request_method EQ "PUT">
        <cfset requestBody = ToString(getHttpRequestData().content)>

        <cfoutput>
            <p><b>Message Body:</b> #requestBody#</p>
        </cfoutput>
    <cfelse>
        <p><b>Message Body:</b> N/A</p>
    </cfif>
</body>
</html>
