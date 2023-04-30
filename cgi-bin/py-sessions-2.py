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
    <h1>Python Sessions Page 2</h1>""")

# Parse cookies
cookie_str = os.environ.get("HTTP_COOKIE")
if cookie_str:
    cookies = SimpleCookie(cookie_str)
    if 'name' in cookies and cookies['name'].value != "destroyed":
        name = cookies['name'].value
    else:
        name = "You do not have a name set"
else:
    name = "You do not have a name set"

print(f"<p><b>Name:</b> {name}</p>")
print("<br/><br/>")
print("<a href=\"/cgi-bin/py-sessions-1.py\">Session Page 1</a><br/>")
print("<a href=\"/cgi-form/py-cgiform.html\">Python CGI Form</a><br />")
print("""<form style="margin-top:30px" action="/cgi-bin/py-destroy-session.py" method="get">
    <button type="submit">Destroy Session</button>
</form>""")

print("</body>")
print("</html>")

