#include<stdio.h>
int main(void)
{
	int val1, val2, enzan, ans,loop;
	printf("�N�\�݂����ȃp�\�R��\n");
	loop = 1;
	while (loop == 1)
	{
	rewind(stdin);
	scanf_s("%d%d%d", &val1, &enzan, &val2);

	
		switch (enzan)
		{
		case 1:
			ans = val1 + val2;
			break;
		case 2:
			ans = val1 - val2;
			break;
		case 3:
			ans = val1*val2;
			break;
		default:
			break;
		}
		printf("���̃p�\�R���̒l�i��%d�~�ł�\n",ans);
	}
	
}