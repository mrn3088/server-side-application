package main

import (
	"fmt"
	"net/http"
	"net/http/cgi"
)

func main() {
	_ = cgi.Serve(http.HandlerFunc(func(w http.ResponseWriter, r *http.Request) {
		// Generate the HTTP header
		w.Header().Set("Content-Type", "text/html")

		// Get the username from the URL query parameter
		username := r.URL.Query().Get("username")

		// Output HTML content
		fmt.Fprintf(w, `<html>
<head>
<title>Go Sessions Page 2</title>
</head>
<body>
<h1>Go Sessions Page 2</h1>
<p><b>Username:</b> %s</p>
<br/><br/>
<a href="/cgi-bin/go-sessions-1.cgi?username=%s">Session Page 1</a><br/>
<a href="/go-cgiform.html">Go CGI Form</a><br />
<form style="margin-top:30px" action="/cgi-bin/go-destroy-session.cgi" method="get">
<button type="submit">Destroy Session</button>
</form>
</body>
</html>`, username, username)
	}))
}
