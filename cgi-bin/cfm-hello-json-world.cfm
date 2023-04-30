<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <cfprocessingdirective pageEncoding="UTF-8">
    <cfcontent type="application/json">
    <cfset result = {}>
    <cfset result.message = "Monster Team was here - Hello, ColdFusion!">
    <cfset result.generatedWith = "ColdFusion programming language">
    
    <cfset currentTime = DateFormat(Now(), "yyyy-mm-dd") & " " & TimeFormat(Now(), "HH:nn:ss")>
    <cfset result.currentTime = currentTime>
  
    <cfif CGI.HTTP_X_FORWARDED_FOR NEQ "">
        <cfset userIP = CGI.HTTP_X_FORWARDED_FOR>
    <cfelse>
        <cfset userIP = CGI.REMOTE_ADDR>
    </cfif>
    <cfset result.userIP = userIP>
    <cfoutput>#SerializeJSON(result)#</cfoutput>
</head>
<body>
</body>
</html>

