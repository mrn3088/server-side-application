<!DOCTYPE html>
<html>
    <head>
        <title>CF Sessions</title>
    </head>
    <body>
        <h1>CF Sessions Page 1</h1>
        <cfset sessionManagement = "true">
        <cfif IsDefined("Form.username")>
            <cfset Session.username = Form.username>
        </cfif>

        <cfif IsDefined("Cookie.CFID") AND IsDefined("Cookie.CFTOKEN")>
            <p><b>CFID:</b> #Cookie.CFID#</p>
            <p><b>CFTOKEN:</b> #Cookie.CFTOKEN#</p>
        <cfelse>
            <p><b>CFID & CFTOKEN:</b> No session exists</p>
        </cfif>

        <cfif IsDefined("Session.username") AND Session.username NEQ "">
            <p><b>Name:</b> #Session.username#</p>
        <cfelse>
            <p><b>Name:</b> You do not have a name set</p>
        </cfif>

        <a href="/cf-sessions-2.cfm">Session Page 2</a>
        <a href="/cf-cgiform.cfm">CF CGI Form</a>
        <form style="margin-top:30px" action="/cf-destroy-session.cfm" method="get">
            <button type="submit">Destroy Session</button>
        </form>
    </body>
</html>
