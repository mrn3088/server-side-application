#!/usr/bin/python3

import os
import cgi
from http.cookies import SimpleCookie

# Generate the HTTP header
print("Cache-Control: no-cache")

# Get Name from form
form = cgi.FieldStorage()
username = form.getvalue('username')

# Set the cookie using a header, add extra newline to end headers
if username:
    cookie = SimpleCookie()
    cookie['name'] = username
    print(f"Content-type: text/html")
    print(f"{cookie}\n")
else:
    print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>Python Sessions</title></head>
<body>
    <h1>Python Sessions Page 1</h1>
    <table>""")

# Check for old Cookie and display the 'name' cookie value
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
<a href="/cgi-bin/py-sessions-2.py">Session Page 2</a>
<br />
<a href="/cgi-form/py-cgiform.html">Python CGI Form</a>
<br /><br />

<form action="/cgi-bin/py-destroy-session.py" method="get">
    <button type="submit">Destroy Session</button>
</form>
</body>
</html>""")
