#!/usr/bin/python3

import os
import sys

# Generate the HTTP header
print("Cache-Control: no-cache")

# Get Name from stdin
username = sys.stdin.readline().strip()

# Check to see if a proper name was sent
name = ""
if username.startswith('username='):
    name = username[9:]

# Set the cookie using a header, add extra newline to end headers
if len(name) > 0:
    print(f"Content-type: text/html")
    print(f"Set-Cookie: {name}\n")
else:
    print("Content-type: text/html\n")

# Output HTML body
print("""<html>
<head><title>Python Sessions</title></head>
<body>
    <h1>Python Sessions Page 1</h1>
    <table>""")

def parse_string(s):
    first_semi = s.find(';')
    if first_semi == -1:
        return None  # ';' character not found

    second_semi = s.find(';', first_semi + 1)
    if second_semi == -1:
        return None  # second ';' character not found

    return s[first_semi + 1:second_semi]


# First check for new Cookie, then Check for old Cookie
if len(name) > 0:
    print(f"<tr><td>Cookie:</td><td>{name}</td></tr>")
elif os.environ.get("HTTP_COOKIE") and os.environ.get("HTTP_COOKIE") != "destroyed":
    print(f"<tr><td>Cookie:</td><td>{parse_string(os.environ['HTTP_COOKIE'])}</td></tr>")
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