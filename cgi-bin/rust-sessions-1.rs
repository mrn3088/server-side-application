use cgi::Request;
use std::io::{self, Write};
use url::form_urlencoded;

fn main() {
    let request = Request::parse().unwrap();

    // Generate the HTTP header
    println!("Content-type: text/html\n");

    // Get the username from the URL query parameter
    let query_params = request.query_string().unwrap_or("");
    let username = form_urlencoded::parse(query_params.as_bytes())
        .find(|(key, _)| key == "username")
        .map(|(_, value)| value.into_owned())
        .unwrap_or_else(|| "".to_string());

    // Output HTML content
    let html = format!(
        r#"<html>
<head>
<title>Rust Sessions Page 1</title>
</head>
<body>
<h1>Rust Sessions Page 1</h1>
<p><b>Username:</b> {username}</p>
<br/><br/>
<a href="/cgi-bin/rust-sessions-2.cgi?username={username}">Session Page 2</a><br/>
<a href="/cgi-form/rust-cgiform.html">Rust CGI Form</a><br />
<form style="margin-top:30px" action="/cgi-bin/rust-destroy-session.cgi" method="get">
<button type="submit">Destroy Session</button>
</form>
</body>
</html>"#,
        username = username
    );

    io::stdout().write_all(html.as_bytes()).unwrap();
}
