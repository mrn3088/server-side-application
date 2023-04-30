<cfcontent type="application/json; charset=utf-8">
<cfheader name="Cache-Control" value="no-cache">

<cfset currentDateTime = Now() />
<cfset userIP = CGI.REMOTE_ADDR />

<cfset message = {
    "title": "Hello, ColdFusion!",
    "heading": "Hello, ColdFusion!",
    "message": "This page was generated with the ColdFusion programming language",
    "time": DateFormat(currentDateTime, "yyyy-mm-dd") & " " & TimeFormat(currentDateTime, "HH:nn:ss"),
    "IP": userIP
} />

<cfoutput>#serializeJSON(message)#</cfoutput>
