<!DOCTYPE html>
<html>
    <head>
        <title>Environment Variables</title>
    </head>
    <body>
        <h1 align="center">Environment Variables</h1>
        <hr>

        <cfloop collection="#CGI#" item="key">
            <cfoutput>
                #key#: #CGI[key]#<br>
            </cfoutput>
        </cfloop>

        <cfset headers = GetHttpRequestData().headers>
        <cfloop collection="#headers#" item="key">
            <cfoutput>
                #key#: #headers[key]#<br>
            </cfoutput>
        </cfloop>
    </body>
</html>
