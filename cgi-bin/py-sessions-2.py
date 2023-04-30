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

cookie_string = os.environ.get('HTTP_COOKIE')
cookie = SimpleCookie()
cookie.load(cookie_string)

if cookie.get('name'):
    previous_name = cookie['name'].value
    print(f"<tr><td>Previous Cookie Name:</td><td>{previous_name}</td></tr>")
else:
    print("<tr><td>Previous Cookie Name:</td><td>None</td></tr>")


# if os.environ.get("HTTP_COOKIE") and os.environ.get("HTTP_COOKIE") != "destroyed":
#     print(f"<tr><td>Cookie:</td><td>{os.environ['HTTP_COOKIE']}</td></tr>")
# else:
#     print("<tr><td>Cookie:</td><td>None</td></tr>")

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