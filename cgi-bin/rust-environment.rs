use std::env;

fn main() {
    // Generate the HTTP header
    println!("Cache-Control: no-cache");
    println!("Content-type: text/html\n");

    // Generate the page body
    // Output HTML header
    println!(
        r#"<html>
	<head>
		<title>Environment Variables</title>
	</head>
	<body>
		<h1 align="center">Environment Variables</h1>
		<hr/>"#
    );

    // Iterate through environment variables and print them
    for key_value_pair in env::vars() {
        println!("{}<br/>", key_value_pair.join("="));
    }

    // Output HTML footer
    println!("</body></html>");
}
