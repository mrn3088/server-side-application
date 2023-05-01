#!/usr/bin/env rustc
use std::collections::HashMap;
use std::env;

fn main() {

    println!("Content-type: text/html\n");
    println!("<html>");
    println!("<head><title>Hello, World!</title></head>");
    println!("<body><h1 align=center>Environment Variables</h1>\
  	<hr/>\n");
    println!("</html>");


    // Parse the environment variables into a HashMap
    let env_vars: HashMap<String, String> = env::vars().collect();

    // Print the request headers
    println!("Request Headers:");
    for (key, value) in env_vars.iter().filter(|(key, _)| key.starts_with("HTTP_")) {
        println!("<br>{}: {}", key, value);
    }

    println!("<br>");
    // Print the server variables
    println!("<br>Server Variables:");
    for (key, value) in env_vars.iter().filter(|(key, _)| !key.starts_with("HTTP_")) {
        println!("<br>{}: {}", key, value);
    }
	
  	// //Printing HTML footer
  	println!("</body></html>");
}