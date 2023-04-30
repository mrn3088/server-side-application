use std::env;
use std::io::Write;
use std::net::ToSocketAddrs;
use std::time::SystemTime;

use serde::{Serialize, Deserialize};

#[derive(Serialize, Deserialize)]
struct Message {
    title: String,
    heading: String,
    message: String,
    time: String,
    ip: String,
}

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: application/json\n");

    // Get the date and IP address
    let current_time = SystemTime::now()
        .duration_since(SystemTime::UNIX_EPOCH)
        .unwrap()
        .as_secs();

    let remote_addr = env::var("REMOTE_ADDR")
        .unwrap_or_else(|_| "127.0.0.1".to_string());

    let ip = remote_addr.to_socket_addrs()
        .unwrap()
        .next()
        .unwrap()
        .to_string();

    // Create the message
    let msg = Message {
        title: String::from("Hello, Rust!"),
        heading: String::from("Hello, Rust!"),
        message: String::from("This page was generated with the Rust programming language"),
        time: current_time.to_string(),
        ip,
    };

    // Encode the message as JSON
    let json_data = serde_json::to_string(&msg).unwrap();

    // Print the JSON data
    println!("{}", json_data);
}
