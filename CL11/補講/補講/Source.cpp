#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h> 
int main(void)
{
	int loop,loop2,loop3,loop4;
	for (loop4 = 1; loop4 < 30; loop4++);
	{
		for (loop3 = 0; loop3 < 3; loop3++)
		{
			for (loop2 = 0; loop2 < 23; loop2++)
			{

				for (loop = 0; loop < 60; loop++)
				{
					printf("%d“ú–Ú%02d:%02d\n", loop3, loop2, loop);
				}
			}
			printf("%d“ú–Ú24:00", loop3);
		}
	}
	rewind(stdin);
	getchar();
}