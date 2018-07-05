#include<stdio.h>
int main(void)
{
	int col, row,cnt,loop,loopcnt;

	rewind(stdin);
	scanf_s("%d", &loopcnt);
	rewind(stdin);
	scanf_s("%d", &row);
	row = 1;
	for (loop=1; loop <= loopcnt; loop++)
	{
			for (cnt = 1; cnt <= row; cnt++)
			{
				printf("‚Ê");
			}
			printf("\n");
			row = row++;

	}
	rewind(stdin);
	getchar();
	return 0;
}