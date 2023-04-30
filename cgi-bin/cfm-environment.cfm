<!DOCTYPE html>
<html>
<head>
    <title>Environment Variables</title>
</head>
<body>
    <h1 align="center">Environment Variables</h1>
    <hr/>
    
    <cfheader name="Cache-Control" value="no-cache">
    
    <table>
        <cfloop collection="#CGI#" item="key">
            <tr>
                <td>#key#</td>
                <td>=</td>
                <td>#CGI[key]#</td>
            </tr>
        </cfloop>
    </table>
    
</body>
</html>
