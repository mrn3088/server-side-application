#!/usr/bin/python3

import os
from urllib.parse import parse_qsl

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML header
print("""<html>
<head>
    <title>GET query string</title>
</head>
<body>
    <h1 align="center">GET query string</h1>
    <hr/>""")

# Get and format query string
query_string = os.environ.get("QUERY_STRING", "")
print(f"Raw query string: {query_string}<br/><br/>")
print("<table> Formatted Query String:")

# Parse and display the query string
for key, value in parse_qsl(query_string):
    print(f"<tr><td>{key}:</td><td>{value}</td></tr>")

# Output HTML footer
print("</table>")
print("</body></html>")
