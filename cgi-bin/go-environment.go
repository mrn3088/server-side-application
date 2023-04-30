package main

import (
	"fmt"
	"os"
)

func main() {
	// Generate the HTTP header
	fmt.Println("Cache-Control: no-cache")
	fmt.Println("Content-type: text/html\n")

	// Generate the page body
	// Output HTML header
	fmt.Println(`<html>
	<head>
		<title>Environment Variables</title>
	</head>
	<body>
		<h1 align="center">Environment Variables</h1>
		<hr/>`)

	// Iterate through environment variables and print them
	for _, keyValuePair := range os.Environ() {
		fmt.Printf("%s<br/>\n", keyValuePair)
	}
	
	// Output HTML footer
	fmt.Println("</body></html>")

}
