package main

import (
	"encoding/json"
	"fmt"
	"os"
	"time"
)

type message struct {
	Title   string `json:"title"`
	Heading string `json:"heading"`
	Message string `json:"message"`
	Time    string `json:"time"`
	IP      string `json:"IP"`
}

func main() {
	// Generate the HTTP header
	fmt.Println("Cache-Control: no-cache")
	fmt.Println("Content-type: application/json\n")

	// Get the date and IP address
	currentTime := time.Now().Format("2006-01-02 15:04:05")
	ip := os.Getenv("REMOTE_ADDR")

	// Create the message
	msg := message{
		Title:   "Hello, Go!",
		Heading: "Hello, Go!",
		Message: "This page was generated with the Go programming language",
		Time:    currentTime,
		IP:      ip,
	}

	// Encode the message as JSON
	jsonData, _ := json.Marshal(msg)

	// Print the JSON data
	fmt.Println(string(jsonData))
}
