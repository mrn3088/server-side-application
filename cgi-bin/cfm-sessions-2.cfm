<cfparam name="url.username" default="">

<cfoutput>
    <h1>CF Sessions Page 2</h1>
    <cfif len(trim(url.username))>
        <p><b>Username:</b> #url.username#</p>
    <cfelse>
        <p><b>Username:</b> No username set</p>
    </cfif>

    <p><a href="../cgi-form/cfm-cgiform.html">Back to CFM CGI Form</a></p>
    <p><a href="cfm-sessions-1.cfm?username=#url.username#">Session Page 1</a></p>
    <p><a href="cfm-destroy-session.cfm">Destroy Session</a></p>

</cfoutput>
