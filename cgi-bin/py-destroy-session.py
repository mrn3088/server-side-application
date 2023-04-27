#!/usr/bin/env python3

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Set-Cookie: destroyed")
print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>C Session Destroyed</title></head>
<body>
    <h1>C Session Destroyed</h1>

    <a href="/cgi-bin/c-sessions-1.cgi">Back to Page 1</a>
    <br />
    <a href="/cgi-bin/c-sessions-2.cgi">Back to Page 2</a>
    <br />
    <a href="/cgi-form/c-cgiform.html">C CGI Form</a>
</body>
</html>""")
