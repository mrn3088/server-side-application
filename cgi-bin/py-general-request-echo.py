#!/usr/bin/env python3

import os
import sys

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML header
print("""<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <hr/>""")

# Get environment vars
print("<table>")
print(f"<tr><td>Protocol:</td><td>{os.environ.get('SERVER_PROTOCOL', '')}</td></tr>")
print(f"<tr><td>Method:</td><td>{os.environ.get('REQUEST_METHOD', '')}</td></tr>")

# Read message body from stdin
message_body = sys.stdin.readline().strip()
print(f"<tr><td>Message Body:</td><td>{message_body}</td></tr>")

# Output HTML footer
print("</table>")
print("</body></html>")
