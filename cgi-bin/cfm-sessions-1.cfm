<cfparam name="url.username" default="">

<cfoutput>
    <h1>CF Sessions Page 1</h1>
    <cfif len(trim(url.username))>
        <p><b>Username:</b> #url.username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>
    
    <p><a href="../cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a></p>
    <p><a href="cfm-sessions-2.cfm?username=#url.username#">Session Page 2</a></p>
    <p><a href="cfm-destroy-session.cfm">Destroy Session</a></p>
</cfoutput>
