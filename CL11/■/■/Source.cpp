#include<stdio.h>
int main(void)
{
	int homo,loop,looprow,val1,val2;
	homo = 1;
	while (homo ==1)
	{
		rewind(stdin);
		scanf_s("%d%d", &val1, &val2);
		looprow = 1;
		loop = 1;
		while (loop <= val1)
		{
			while (looprow <= val2)
			{
				printf("¡");
				looprow = looprow + 1;
			}
			printf("\n");
			looprow = 1;
			loop = loop + 1;
		}
	}
	rewind(stdin);
	getchar();
	return 0;
}