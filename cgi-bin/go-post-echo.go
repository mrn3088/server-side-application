package main

import (
	"fmt"
	"io/ioutil"
	"net/url"
	"os"
	"strconv"
	"strings"
)

func main() {
	// Generate the HTTP header
	fmt.Println("Cache-Control: no-cache")
	fmt.Println("Content-type: text/html\n")

	// Print HTML file top
	fmt.Println(`<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align="center">POST Request Echo</h1>
<hr>`)

	// Read the Message Body from the Standard Input
	contentLength, _ := strconv.Atoi(os.Getenv("CONTENT_LENGTH"))
	formData := make([]byte, contentLength)
	os.Stdin.Read(formData)

	// Parse the Query String
	values, _ := url.ParseQuery(string(formData))

	fmt.Println("<b>Message Body:</b><br />")
	fmt.Println("<ul>")

	// Print out the Query string
	for key, vals := range values {
		for _, value := range vals {
			fmt.Printf("<li>%s = %s</li>\n", key, value)
		}
	}

	fmt.Println("</ul>")

	// Print the HTML file bottom
	fmt.Println("</body></html>")
}
