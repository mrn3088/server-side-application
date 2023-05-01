use std::env;
use std::io::{self, Read};

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    // Print HTML file top
    println!(
        r#"<!DOCTYPE html>
<html><head><title>General Request Echo</title>
</head><body><h1 align="center">General Request Echo</h1>
<hr>"#
    );

    // HTTP Protocol, HTTP Method, and the Query String are all environment variables
    println!(
        "<p><b>HTTP Protocol:</b> {}</p>",
        env::var("SERVER_PROTOCOL").unwrap_or_default()
    );
    println!(
        "<p><b>HTTP Method:</b> {}</p>",
        env::var("REQUEST_METHOD").unwrap_or_default()
    );
    println!(
        "<p><b>Query String:</b> {}</p>",
        env::var("QUERY_STRING").unwrap_or_default()
    );

    // Read the Message Body from the Standard Input
    let content_length = env::var("CONTENT_LENGTH")
        .unwrap_or_else(|_| "0".to_string())
        .parse::<usize>()
        .unwrap_or(0);
    let mut form_data = vec![0u8; content_length];
    io::stdin().read(&mut form_data).unwrap();

    println!("<p><b>Message Body:</b> {}</p>", String::from_utf8_lossy(&form_data));

    // Print the HTML file bottom
    println!("</body></html>");
}
