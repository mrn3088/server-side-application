use cgi::Request;
use std::io::{self, Write};

fn main() {
    let _request = Request::parse().unwrap();

    // Generate the HTTP header
    println!("Content-type: text/html\n");

    // Output HTML content
    let html = r#"<html>
<head>
<title>Rust Session Destroyed</title>
</head>
<body>
<h1>Session Destroyed</h1>
<a href="/cgi-form/rust-cgiform.html">Back to the Rust CGI Form</a><br />
<a href="/cgi-bin/rust-sessions-1.cgi">Back to Page 1</a><br />
<a href="/cgi-bin/rust-sessions-2.cgi">Back to Page 2</a>
</body>
</html>"#;

    io::stdout().write_all(html.as_bytes()).unwrap();
}
