#!/usr/bin/perl
print "Cache-Control: no-cache\n";
print "Content-type: text/html \n\n";

# print HTML file top
print <<END;
<!DOCTYPE html>
<html><head><title>POST Request Echo</title>
</head><body><h1 align="center">POST Request Echo</h1>
<hr>
END

# NOTE: Although the Query String is an environment variable, the Message Body
# must be read in from the Standard Input with any language using CGI.
# Credit for this code to read in the Post data comes from:
# https://stackoverflow.com/questions/30447317/how-to-handle-post-request-to-perl-from-html
my $bytes_read = read STDIN, my $form_data, $ENV{CONTENT_LENGTH};

# Credit for this code to parse the Query String:
# https://www.mediacollege.com/internet/perl/query-string.html
if (length ($form_data) > 0){
  $buffer = $form_data;
  @pairs = split(/&/, $buffer);
  foreach $pair (@pairs) {
    ($name, $value) = split(/=/, $pair);
    $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
    $in{$name} = $value;
  }
}

print "<b>Message Body:</b><br />\n";
print "<ul>\n";

#Print out the Query string
$loop = 0;
foreach my $key (%in) {
  $loop += 1;
  if($loop % 2 != 0) {
    print "<li>$key = $in{$key}</li>\n";
  }
}

print "</ul>\n";
# Print the HTML file bottom
print "</body></html>\n";
