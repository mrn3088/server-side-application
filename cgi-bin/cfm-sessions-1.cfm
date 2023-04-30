<!DOCTYPE html>
<html>
<head>
    <title>Session 1</title>
</head>
<body>
    <h1 align="center">Session 1</h1>
    <hr/>
    
    <cfheader name="Cache-Control" value="no-cache">
    
    <cfsavecontent variable="requestBody">
        <cfoutput>#ToString(GetHttpRequestData().content)#</cfoutput>
    </cfsavecontent>
    
    <cfset Session.Name = requestBody>
    
    <a href="cfm-sessions-2.cfm">Session Page 2</a>
    
</body>
</html>
