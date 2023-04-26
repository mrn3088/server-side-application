#!/usr/bin/perl
use CGI::Session;
use CGI;

print "Content-type: text/html\n\n";

my $cgi = new CGI;

my $session;
{
    my $sid = $cgi->cookie("SITE_SID") || $cgi->param("sid") || undef;
    $session  = new CGI::Session($sid);
}
$session->delete();

print "<html>";
print "<head>";
print "<title>Perl Session Destroyed</title>";
print "</head>";
print "<body>";
print "<h1>Session Destroyed</h1>";
print "<a href=\"/perl-cgiform.html\">Back to the Perl CGI Form</a><br />";
print "<a href=\"/cgi-bin/perl-sessions-1.pl\">Back to Page 1</a><br />";
print "<a href=\"/cgi-bin/perl-sessions-2.pl\">Back to Page 2</a>";
print "</body>";
print "</html>";
