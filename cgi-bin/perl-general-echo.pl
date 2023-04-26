#!/usr/bin/perl
print "Cache-Control: no-cache\n";
print "Content-type: text/html \n\n";

# print HTML file top
print <<END;
<!DOCTYPE html>
<html><head><title>General Request Echo</title>
</head><body><h1 align="center">General Request Echo</h1>
<hr>
END

# HTTP Protocol, HTTP Method, and the Query String are all environment variables
print "<p><b>HTTP Protocol:</b> $ENV{SERVER_PROTOCOL}</p>";
print "<p><b>HTTP Method:</b> $ENV{REQUEST_METHOD}</p>";
print "<p><b>Query String:</b> $ENV{QUERY_STRING}</p>";

# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in STDIN in Perl comes from:
# https://stackoverflow.com/questions/30447317/how-to-handle-post-request-to-perl-from-html
my $bytes_read = read STDIN, my $form_data, $ENV{CONTENT_LENGTH};

print "<p><b>Message Body:</b> $form_data</p>";

# Print the HTML file bottom
print "</body></html>\n";
