<cfprocessingdirective pageEncoding="UTF-8">
<cfcontent type="application/json">
<cfset result = {}>
<cfset result.title = "Hello, ColdFusion!">
<cfset result.heading = "Hello, ColdFusion!">

<cfset currentTime = DateFormat(Now(), "yyyy-mm-dd") & " " & TimeFormat(Now(), "HH:nn:ss")>
<cfset result.date = currentTime>

<cfif CGI.HTTP_X_FORWARDED_FOR NEQ "">
    <cfset userIP = CGI.HTTP_X_FORWARDED_FOR>
<cfelse>
    <cfset userIP = CGI.REMOTE_ADDR>
</cfif>
<cfset result.ip = userIP>
<cfset result.message = "This page was generated with the ColdFusion programming language">
<cfoutput>#trim(SerializeJSON(result))#</cfoutput>
</cfprocessingdirective>
