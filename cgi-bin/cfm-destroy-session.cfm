<!DOCTYPE html>
<html>
<head>
    <title>ColdFusion Session Destroyed</title>
</head>
<body>
    <h1>ColdFusion Session Destroyed</h1>

    <cfset StructDelete(Session, "Name")>
    
    <a href="cfm-sessions-1.cfm">Back to Page 1</a>
    <br />
    <a href="cfm-sessions-2.cfm">Back to Page 2</a>
</body>
</html>
