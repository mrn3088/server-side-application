<!DOCTYPE html>
<html>
<head>
    <title>GET Query String</title>
</head>
<body>
    <h1 align="center">GET Query String</h1>
    <hr/>
    
    <cfheader name="Cache-Control" value="no-cache">
    
    <cfoutput>
        Raw query string: #CGI.QUERY_STRING#<br/><br/>
        <table> Formatted Query String:
            <cfloop list="#CGI.QUERY_STRING#" index="query" delimiters="&">
                <cfset key = ListFirst(query, "=")>
                <cfset value = ListLast(query, "=")>
                <tr>
                    <td>#key#:</td>
                    <td>#value#</td>
                </tr>
            </cfloop>
        </table>
    </cfoutput>
    
</body>
</html>
