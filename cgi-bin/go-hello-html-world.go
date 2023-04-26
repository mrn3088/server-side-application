package main

import (
    "fmt"
    "os"
    "time"
)

func main() {
    fmt.Println("Cache-Control: no-cache")
    fmt.Println("Content-type: text/html\n")
    fmt.Println("<html>")
    fmt.Println("<head>")
    fmt.Println("<title>Hello, Go!</title>")
    fmt.Println("</head>")
    fmt.Println("<body>")

    fmt.Println("<h1>Monster Team was here - Hello, Go!</h1>")
    fmt.Println("<p>This page was generated with the Go programming langauge</p>")

    date := time.Now().Local()
    fmt.Println("<p>Current Time: ", date, "</p>")

    // IP Address is an environment variable when using CGI
    address := os.Getenv("REMOTE_ADDR")
    fmt.Println("<p>Your IP Address: ", address, "</p>")

    fmt.Println("</body>")
    fmt.Println("</html>")
}