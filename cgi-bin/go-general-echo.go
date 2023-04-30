package main

import (
	"fmt"
	"os"
	"strconv"
)

func main() {
	// Generate the HTTP header
	fmt.Println("Cache-Control: no-cache")
	fmt.Println("Content-type: text/html\n")

	// Print HTML file top
	fmt.Println(`<!DOCTYPE html>
<html><head><title>General Request Echo</title>
</head><body><h1 align="center">General Request Echo</h1>
<hr>`)

	// HTTP Protocol, HTTP Method, and the Query String are all environment variables
	fmt.Printf("<p><b>HTTP Protocol:</b> %s</p>\n", os.Getenv("SERVER_PROTOCOL"))
	fmt.Printf("<p><b>HTTP Method:</b> %s</p>\n", os.Getenv("REQUEST_METHOD"))
	fmt.Printf("<p><b>Query String:</b> %s</p>\n", os.Getenv("QUERY_STRING"))

	// Read the Message Body from the Standard Input
	contentLength, _ := strconv.Atoi(os.Getenv("CONTENT_LENGTH"))
	formData := make([]byte, contentLength)
	os.Stdin.Read(formData)

	fmt.Printf("<p><b>Message Body:</b> %s</p>\n", string(formData))

	// Print the HTML file bottom
	fmt.Println("</body></html>")
}
