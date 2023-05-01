use std::io::{self, Read};

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    // Output HTML header
    println!(
        r#"<html>
<head>
    <title>POST Message Body</title>
</head>
<body>
    <h1 align="center">POST Message Body</h1>
    <hr/>"#
    );

    // Read POST message body from stdin
    let mut message_body = String::new();
    let _ = io::stdin().read_line(&mut message_body);
    let message_body = message_body.trim();

    println!("Message Body: {}<br/>", message_body);

    // Output HTML footer
    println!("</body></html>");
}
