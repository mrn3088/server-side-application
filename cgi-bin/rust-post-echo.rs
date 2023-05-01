use cgi::Request;
use std::io::{self, Read, Write};
use url::form_urlencoded;

fn main() {
    let request = Request::parse().unwrap();

    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    // Print HTML file top
    let html_top = r#"<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align="center">POST Request Echo</h1>
<hr>"#;

    // Read the Message Body from the Standard Input
    let content_length = request
        .content_length()
        .unwrap_or_default()
        .try_into()
        .unwrap_or_default();
    let mut form_data = vec![0u8; content_length];
    io::stdin().read_exact(&mut form_data).unwrap();

    // Parse the Query String
    let values = form_urlencoded::parse(&form_data);

    let html_body = format!("<b>Message Body:</b><br />\n<ul>\n");

    // Print out the Query string
    let mut html_list = String::new();
    for (key, value) in values {
        html_list.push_str(&format!("<li>{} = {}</li>\n", key, value));
    }

    let html_bottom = r#"</ul>
</body></html>"#;

    let html = format!(
        "{}{}{}{}",
        html_top,
        html_body,
        html_list,
        html_bottom
    );

    io::stdout().write_all(html.as_bytes()).unwrap();
}
