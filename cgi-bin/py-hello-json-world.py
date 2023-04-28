#!/usr/bin/python3

import os
import json
from datetime import datetime

# Generate the HTTP header
print("Cache-Control: no-cache")
print("Content-type: application/json\n")

# Get the current date and time
current_datetime = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

# Get the user's IP address from the environment
user_ip = os.environ.get("REMOTE_ADDR", "unknown")

# Create a dictionary with the same structure as the Perl example
message = {
    "title": "Hello, Python!",
    "heading": "Hello, Python!",
    "message": "This page was generated with the Python programming language",
    "time": current_datetime,
    "IP": user_ip
}

# Convert the dictionary to a JSON string
json_data = json.dumps(message)

# Output the JSON data
print(json_data)
