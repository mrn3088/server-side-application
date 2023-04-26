#include "stdio.h"
#include "stdlib.h"

int main(int argc, char **argv, char **envp)
{
  char str[1000];
  // Print HTML header
  printf("Cache-Control: no-cache\n");
  printf("Content-type: text/html\n\n");
  printf("<html><head><title>General Request Echo</title></head> \
	<body><h1 align=center>General Request Echo</h1> \
  	<hr/>\n");

  // Get environment vars
  printf("<table>\n");
  printf("<tr><td>Protocol:</td><td>%s</td></tr>\n", getenv("SERVER_PROTOCOL"));
  printf("<tr><td>Method:</td><td>%s</td></tr>\n", getenv("REQUEST_METHOD"));
  printf("<tr><td>Message Body:</td><td> %s</td></tr>\n", fgets(str, 1000, stdin));
  
  // Print HTML footer
  printf("</body>");
  printf("</html>");
  return 0;
}
