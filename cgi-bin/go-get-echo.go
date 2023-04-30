package main

import (
	"fmt"
	"net/url"
	"os"
)

func main() {
	// Generate the HTTP header
	fmt.Println("Cache-Control: no-cache")
	fmt.Println("Content-type: text/html\n")

	// Output HTML header
	fmt.Println(`<html>
<head>
    <title>GET query string</title>
</head>
<body>
    <h1 align="center">GET query string</h1>
    <hr/>`)

	// Get and format query string
	queryString := os.Getenv("QUERY_STRING")
	fmt.Printf("Raw query string: %s<br/><br/>\n", queryString)
	fmt.Println("<table> Formatted Query String:")

	// Parse and display the query string
	values, _ := url.ParseQuery(queryString)
	for key, vals := range values {
		for _, value := range vals {
			fmt.Printf("<tr><td>%s:</td><td>%s</td></tr>\n", key, value)
		}
	}

	// Output HTML footer
	fmt.Println("</table>")
	fmt.Println("</body></html>")
}
