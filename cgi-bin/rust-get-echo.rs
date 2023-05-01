use std::env;
use std::io::{self, Read};
use std::collections::HashMap;
use url::form_urlencoded;

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    // Print HTML file top
    println!(
        r#"<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align="center">POST Request Echo</h1>
<hr>"#
    );

    // Read the Message Body from the Standard Input
    let content_length = env::var("CONTENT_LENGTH")
        .unwrap_or_else(|_| "0".to_string())
        .parse::<usize>()
        .unwrap_or(0);
    let mut form_data = vec![0u8; content_length];
    io::stdin().read(&mut form_data).unwrap();

    // Parse the Query String
    let values: HashMap<String, Vec<String>> = form_urlencoded::parse(&form_data)
        .into_owned()
        .into_iter()
        .fold(HashMap::new(), |mut acc, (key, value)| {
            acc.entry(key).or_insert_with(Vec::new).push(value);
            acc
        });

    println!("<b>Message Body:</b><br />");
    println!("<ul>");

    // Print out the Query string
    for (key, vals) in &values {
        for value in vals {
            println!("<li>{} = {}</li>", key, value);
        }
    }

    println!("</ul>");

    // Print the HTML file bottom
    println!("</body></html>");
}
