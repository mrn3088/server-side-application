#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>
int main(void) {
	time_t t;
	time(&t);
	char *buffer = ctime(&t);
	buffer[strlen(buffer) - 1] = '\0';
	printf("Cache-Control: no-cache\r\n");
	printf("Content-type: application/json\r\n\r\n");
	printf("{\n\t\"message\": \"Hello World\",\n");
	printf("\t\"date\": \"%s\",\n", buffer);
	printf("\t\"currentIP\": \"%s\"\n}\n", getenv("REMOTE_ADDR"));
	return 1;
}
