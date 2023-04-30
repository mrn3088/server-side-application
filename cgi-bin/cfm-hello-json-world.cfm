<cfprocessingdirective pageEncoding="UTF-8">
<cfcontent type="application/json">
<cfset result = {}>
<cfset result.MESSAGE = "Monster Team was here - Hello, ColdFusion!">
<cfset result.GENERATEDWITH = "ColdFusion programming language">

<cfset currentTime = DateFormat(Now(), "yyyy-mm-dd") & " " & TimeFormat(Now(), "HH:nn:ss")>
<cfset result.CURRENTTIME = currentTime>

<cfif CGI.HTTP_X_FORWARDED_FOR NEQ "">
    <cfset userIP = CGI.HTTP_X_FORWARDED_FOR>
<cfelse>
    <cfset userIP = CGI.REMOTE_ADDR>
</cfif>
<cfset result.USERIP = userIP>
<cfoutput>#trim(SerializeJSON(result))#</cfoutput>
