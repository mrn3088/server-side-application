#!/usr/bin/python3

import sys

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML header
print("""<html>
<head>
    <title>POST Message Body</title>
</head>
<body>
    <h1 align="center">POST Message Body</h1>
    <hr/>""")

# Read POST message body from stdin
message_body = sys.stdin.readline().strip()

print(f"Message Body: {message_body}<br/>")

# Output HTML footer
print("</body></html>")
