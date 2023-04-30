#!/usr/bin/python3

import os
from http.cookies import SimpleCookie

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>Python Sessions</title></head>
<body>
    <h1>Python Sessions Page 2</h1>
    <table>""")

# Parse cookies
cookie_str = os.environ.get("HTTP_COOKIE")
if cookie_str:
    cookies = SimpleCookie(cookie_str)
    if 'name' in cookies and cookies['name'].value != "destroyed":
        print(f"<tr><td>Cookie:</td><td>{cookies['name'].value}</td></tr>")
    else:
        print("<tr><td>Cookie:</td><td>None</td></tr>")
else:
    print("<tr><td>Cookie:</td><td>None</td></tr>")

print("""</table>
<br />
<a href="/cgi-bin/py-sessions-1.py">Session Page 1</a>
<br />
<a href="/cgi-form/py-cgiform.html">Python CGI Form</a>
<br /><br />

<form action="/cgi-bin/py-destroy-session.py" method="get">
    <button type="submit">Destroy Session</button>
</form>
</body>
</html>""")
