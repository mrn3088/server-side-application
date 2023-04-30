<!DOCTYPE html>
<html>
<head>
    <title>ColdFusion Sessions</title>
</head>
<body>
    <h1>ColdFusion Sessions Page 2</h1>
    <table>
        <cfif IsDefined("Session.Name")>
            <tr><td>Name:</td><td>#Session.Name#</td></tr>
        <cfelse>
            <tr><td>Name:</td><td>None</td></tr>
        </cfif>
    </table>
    <br />
    <a href="cfm-sessions-1.cfm">Session Page 1</a>
    <br /><br />

    <form action="cfm-destroy_session.cfm" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
