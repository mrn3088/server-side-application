use std::io::Write;
use std::time::LocalTime;

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

    let date = LocalTime::now();
    println!("<p>Current Time: {}</p>", date);

    // IP Address is an environment variable when using CGI
    let address = env::var("REMOTE_ADDR").unwrap_or_default();
    println!("<p>Your IP Address: {}</p>", address);

    println!("</body>");
    println!("</html>");
    
    // print!("Cache-Control: no-cache\n");
    // print!("Content-type: text/html\n\n");

    // print!("<html>\n");
    // print!("  <head>\n");
    // print!("    <title>Hello Rust CGI World</title>\n");
    // print!("  </head>\n");
    // print!("  <body>\n");
    // print!("    <h1 align=center>Hello Rust CGI World</h1>\n");
    // print!("    <hr/>\n");
    // print!("    This progaram was generated at: {}\n", SystemTime::now());
    // print!("  </body>\n");
    // print!("</html>\n");
}

