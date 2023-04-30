// extern crate local_ip_address;
use std::io::Write;
use std::time::SystemTime;
// use local_ip_address::local_ip;

fn main() {

    println!( "Cache-Control: no-cache\n" );
    println!( "Content-type: text/html\n" );
    println!( "\n" );
    println!( "<html>\n" );
    println!( "  <head>\n" );
    println!( "    <title>Hello Rust CGI World</title>\n" );
    println!( "  </head>\n" );
    println!( "  <body>\n" );
    println!( "    <h1 align=center>Hello Rust CGI World</h1>\n" );
    println!( "    <hr/>\n" );
    println!( "    This progaram was generated at: {:?}", SystemTime::now() );
    // println!( "    Your current IP address is: {:?}", local_ip() );
    println!( "  </body>\n" );
    println!( "</html>\n" );
    
    // write_stderr_s( "Cache-Control: no-cache\n" );
    // write_stdout_s( "Content-type: text/html\n" );
    // write_stdout_s( "\n" );
    // write_stdout_s( "<html>\n" );
    // write_stdout_s( "  <head>\n" );
    // write_stdout_s( "    <title>Hello Rust CGI World</title>\n" );
    // write_stdout_s( "  </head>\n" );
    // write_stdout_s( "  <body>\n" );
    // write_stdout_s( "    <h1 align=center>Hello Rust CGI World</h1>\n" );
    // write_stdout_s( "    <hr/>\n" );
    // write_stdout_s( "    This progaram was generated at: {:?}\n", now );
    // write_stdout_s( "    Your current IP address is: {:?}\n", my_local_ip );
    // write_stdout_s( "  </body>\n" );
    // write_stdout_s( "</html>\n" );
}

fn write_stderr( msg : String ) {
    let mut stderr = std::io::stderr();
    write!(&mut stderr, "{}", msg).unwrap();
}
 
fn write_stderr_s( msg : &str ) {
    write_stderr( msg.to_string() );
}
 
fn write_stdout( msg : String ) {
    let mut stdout = std::io::stdout();
    write!(&mut stdout, "{}", msg).unwrap();
}
 
fn write_stdout_s( msg : &str ) {
    write_stdout( msg.to_string() );
}