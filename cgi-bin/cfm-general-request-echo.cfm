<!DOCTYPE html>
<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <hr/>
    
    <cfheader name="Cache-Control" value="no-cache">
    
    <cfset requestBody = ToString(GetHttpRequestData().content)>
    
    <table>
        <tr>
            <td>Protocol:</td>
            <td>#CGI.SERVER_PROTOCOL#</td>
        </tr>
        <tr>
            <td>Method:</td>
            <td>#CGI.REQUEST_METHOD#</td>
        </tr>
        <tr>
            <td>Message Body:</td>
            <td>#requestBody#</td>
        </tr>
    </table>
    
</body>
</html>
