#!/usr/bin/env python3

import os

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>C Sessions</title></head>
<body>
    <h1>C Sessions Page 2</h1>
    <table>""")

if os.environ.get("HTTP_COOKIE") and os.environ.get("HTTP_COOKIE") != "destroyed":
    print(f"<tr><td>Cookie:</td><td>{os.environ['HTTP_COOKIE']}</td></tr>")
else:
    print("<tr><td>Cookie:</td><td>None</td></tr>")

print("""</table>
<br />
<a href="/cgi-bin/c-sessions-1.cgi">Session Page 1</a>
<br />
<a href="/cgi-form/c-cgiform.html">C CGI Form</a>
<br /><br />

<form action="/cgi-bin/c-destroy-session.cgi" method="get">
    <button type="submit">Destroy Session</button>
</form>
</body>
</html>""")