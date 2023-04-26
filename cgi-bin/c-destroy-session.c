#include <stdio.h>
#include <stdlib.h>

int main(int argc, char **argv, char **envp)
{
  // Headers
  printf("Cache-Control: no-cache\n");
  printf("Set-Cookie: destroyed\n");
  printf("Content-type: text/html\n\n");

  // Body - HTML
  printf("<html>");
  printf("<head><title>C Session Destroyed</title></head>");
  printf("<body>");
  printf("<h1>C Session Destroyed</h1>");

  // Links
  printf("<a href=\"/cgi-bin/c-sessions-1.cgi\">Back to Page 1</a>");
  printf("<br />");
  printf("<a href=\"/cgi-bin/c-sessions-2.cgi\">Back to Page 2</a>");
  printf("<br />");
  printf("<a href=\"/c-cgiform.html\">C CGI Form</a>");

  printf("</body>");
  printf("</html>");

  return 0;
}