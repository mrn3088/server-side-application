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

		// Output HTML content
		fmt.Fprint(w, `<html>
<head>
<title>Go Session Destroyed</title>
</head>
<body>
<h1>Session Destroyed</h1>
<a href="/cgi-form/go-cgiform.html">Back to the Go CGI Form</a><br />
<a href="/cgi-bin/go-sessions-1.cgi">Back to Page 1</a><br />
<a href="/cgi-bin/go-sessions-2.cgi">Back to Page 2</a>
</body>
</html>`)
	}))
}
