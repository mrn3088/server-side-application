use std::io::Write;
use std::time::SystemTime;

fn main() {
    print!("Cache-Control: no-cache\n");
    print!("Content-type: text/html\n\n");

    print!("<html>\n");
    print!("  <head>\n");
    print!("    <title>Hello Rust CGI World</title>\n");
    print!("  </head>\n");
    print!("  <body>\n");
    print!("    <h1 align=center>Hello Rust CGI World</h1>\n");
    print!("    <hr/>\n");
    print!("    This progaram was generated at: {:?}\n", SystemTime::now());
    print!("  </body>\n");
    print!("</html>\n");
}

