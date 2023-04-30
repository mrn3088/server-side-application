<!DOCTYPE html>
<html>
<head>
    <title>POST Message Body</title>
</head>
<body>
    <h1 align="center">POST Message Body</h1>
    <hr/>
    
    <cfheader name="Cache-Control" value="no-cache">
    
    <cfset requestBody = ToString(GetHttpRequestData().content)>
    
    <cfoutput>
        Message Body: #requestBody#<br/>
    </cfoutput>
    
</body>
</html>
