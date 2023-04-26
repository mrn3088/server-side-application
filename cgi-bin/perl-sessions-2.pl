#!/usr/bin/perl
use CGI;
use CGI::Session;

# print "Cache-Control: no-cache\n";

# Access Perl Session
use CGI::Session;

# Create a new CGI Object
$cgi = CGI->new;

# Get the Session ID from the Cookie
$sid = $cgi->cookie("CGISESSID") || undef;
$session = new CGI::Session(undef, $cgi, {Directory=>'/tmp'});

# Access Stored Data
$name = $session->param("username");

print "Content-Type: text/html\n\n";

print "<html>";
print "<head>";
print "<title>Perl Sessions</title>";
print "</head>";
print "<body>";

print "<h1>Perl Sessions Page 2</h1>";

if ($name){
	print("<p><b>Name:</b> $name");
}else{
	print "<p><b>Name:</b> You do not have a name set</p>";
}
print "<br/><br/>";
print "<a href=\"/cgi-bin/perl-sessions-1.pl\">Session Page 1</a><br/>";
print "<a href=\"/perl-cgiform.html\">Perl CGI Form</a><br />";
print "<form style=\"margin-top:30px\" action=\"/cgi-bin/perl-destroy-session.pl\" method=\"get\">";
print "<button type=\"submit\">Destroy Session</button>";
print "</form>";

print "</body>";
print "</html>";

