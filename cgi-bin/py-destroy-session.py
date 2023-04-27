#!/usr/bin/env python3

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Set-Cookie: destroyed")
print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>Python Session Destroyed</title></head>
<body>
    <h1>Python Session Destroyed</h1>

    <a href="/cgi-bin/py-sessions-1.py">Back to Page 1</a>
    <br />
    <a href="/cgi-bin/py-sessions-2.py">Back to Page 2</a>
    <br />
    <a href="/cgi-form/c-cgiform.html">Python CGI Form</a>
</body>
</html>""")
