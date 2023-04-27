#!/usr/bin/env python3

import os
import datetime

# Get the current date and time
current_datetime = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")

# Get the user's IP address from the environment
user_ip = os.environ.get("REMOTE_ADDR", "unknown")

# Generate the HTML content
html_content = f"""
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, Python!</title>
</head>
<body>
    <h1>Monster Team was here - Hello, Python!</h1>
    <p>This page was generated with the Python programming language</p>
    <p>Current Time: {current_datetime}</p>
    <p>Your IP Address: {user_ip}</p>
</body>
</html>
"""

# Output the HTTP header and HTML content
print("Cache-Control: no-cache")
print("Content-type: text/html\n")
print(html_content)
