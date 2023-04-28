#!/usr/bin/python3

import os

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML header
print("""<html>
<head>
    <title>Environment Variables</title>
</head>
<body>
    <h1 align="center">Environment Variables</h1>
    <hr/>""")

# Iterate through environment variables and print them
for key, value in os.environ.items():
    print(f"{key}={value}<br/>")

# Output HTML footer
print("</body></html>")
