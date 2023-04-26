#!/usr/bin/env gorun
package main

import (
	"fmt"
	"net/http"
	"net/http/cgi"
	"time"
)

func main() {
	err := cgi.Serve(http.HandlerFunc(handler))
	if err != nil {
		fmt.Println("Error serving CGI:", err)
	}
}

func handler(w http.ResponseWriter, r *http.Request) {
	fmt.Print("Cache-Control: no-cache\n")
	fmt.Print("Content-type: text/html\n\n")
	fmt.Print("<html>")
	fmt.Print("<head>")
	fmt.Print("<title>Hello, Go!</title>")
	fmt.Print("</head>")
	fmt.Print("<body>")

	fmt.Print("<h1>Monster Team was here - Hello, Go!</h1>")
	fmt.Print("<p>This page was generated with the Go programming language</p>")

	date := time.Now().Format(time.RFC1123)
	fmt.Printf("<p>Current Time: %s</p>", date)

	address := r.RemoteAddr
	fmt.Printf("<p>Your IP Address: %s</p>", address)

	fmt.Print("</body>")
	fmt.Print("</html>")
}
