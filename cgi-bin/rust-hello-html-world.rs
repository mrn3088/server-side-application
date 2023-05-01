use std::env;
use chrono::Local;

fn main() {
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");
    println!("<html>");
    println!("<head>");
    println!("<title>Hello, Rust!</title>");
    println!("</head>");
    println!("<body>");

    println!("<h1>Monster Team was here - Hello, Rust!</h1>");
    println!("<p>This page was generated with the Rust programming language</p>");

    let date = Local::now();
    println!("<p>Current Time: {}</p>", date);

    // IP Address is an environment variable when using CGI
    let address = env::var("REMOTE_ADDR").unwrap_or_default();
    println!("<p>Your IP Address: {}</p>", address);

    println!("</body>");
    println!("</html>");
}
