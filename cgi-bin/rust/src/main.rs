extern crate chrono;
extern crate serde_json;
extern crate serde;

use chrono::prelude::*;
use serde_json::json;
use std::env;

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: application/json\n");

    // Get the current date and time
    let current_datetime = Utc::now().format("%Y-%m-%d %H:%M:%S").to_string();

    // Get the user's IP address from the environment
    let user_ip = env::var("REMOTE_ADDR").unwrap_or("unknown".to_string());

    // Create a dictionary with the same structure as the Python example
    let message = json!({
        "title": "Hello, Rust!",
        "heading": "Hello, Rust!",
        "message": "This page was generated with the Rust programming language",
        "time": current_datetime,
        "IP": user_ip
    });

    // Convert the dictionary to a JSON string
    let json_data = message.to_string();

    // Output the JSON data
    println!("{}", json_data);
}

