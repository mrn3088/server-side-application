#!/usr/bin/env rustc

use std::env;
fn main() {

	println!("Content-type: text/html\n");
    println!("<html>");
    println!("<head><title>Hello, World!</title></head>");
    println!("<body><h1 align=center>Get Query String</h1>\
  	<hr/>\n");
    println!("</html>");

    let args: Vec<String> = env::args().collect();

    if args.len() <= 1 {
        println!("No query string provided.");
        return;
    }

    let query_string = &args[1];
    let query_params = query_string.split("&");

    for param in query_params {
        let kv = param.split("=").collect::<Vec<_>>();
        let key = kv[0];
        let value = kv[1];

        println!("{}: {}", key, value);
    }
	
  	// //Printing HTML footer
  	println!("</body></html>");

}