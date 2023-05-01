use std::collections::HashMap;
use std::env;
use std::io::{self, Read};

fn main() {
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    println!(
        r#"<html>
<head>
    <title>General Request Echo</title>
</head>
<body>
    <h1 align="center">General Request Echo</h1>
    <hr/>"#
    );

    let env_vars: HashMap<String, String> = env::vars().collect();

    println!("<table>");
    println!(
        "<tr><td>Protocol:</td><td>{}</td></tr>",
        env_vars.get("SERVER_PROTOCOL").unwrap_or(&"".to_string())
    );
    println!(
        "<tr><td>Method:</td><td>{}</td></tr>",
        env_vars.get("REQUEST_METHOD").unwrap_or(&"".to_string())
    );

    let mut message_body = String::new();
    io::stdin().read_to_string(&mut message_body).unwrap();
    let message_body = message_body.trim();

    println!("<tr><td>Message Body:</td><td>{}</td></tr>", message_body);

    println!("</table>");
    println!("</body></html>");
}
