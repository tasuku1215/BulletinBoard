#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
void shikaku(void);
int main(void)
{
	int sele, sele2, loop, loop2,loop3, val, val2, loopend,loopend2;
	printf("図形表示プログラム\n");
	printf("\n①四角形\n②階段\n③逆階段\n④階段々\n⑤飛ばし階段\n⑥飛ばし階段々\n⑦45度四角形\n⑧アスタリスク");
	loopend = 1;
	while (loopend<=1)
	{
		
		printf("\n\n1～8の数値を入力してください\n0を押すと終了します\n");
		rewind(stdin);
		scanf("%d", &sele);
		if (sele <=8 && sele>=0)
		{
			switch (sele)
			{
			case 1:
				printf("正方形を表示します\n");
				for (loop3 = 1; loop3 <= 1;)
				{

					printf("縦の長さを入力してください\n");
					scanf_s("%d", &val);
					printf("横の長さを入力してください\n");
					scanf_s("%d", &val2);
					if (val >= 2 && val2 >= 2)
					{
						printf("\n\n");
						for (loop2 = 1; loop2 <= val; loop2++)
						{
							for (loop = 1; loop <= val2; loop++)
							{
								printf("■");
							}
							printf("\n");
						}
						loop3++;
					}
					else
					{
						printf("入力された数値が小さすぎます、もう一度\n");
					}
				}
				break;
				


			case 2:
				printf("階段を表示します\n一辺の長さを入力してください\n");
				scanf_s("%d", &val2);
				printf("\n\n");
				val = 1;
				for (loop2 = 1; loop2 <= val2; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("■");
					}
					val = val++;
					printf("\n");
				}
				break;
				

			case 3:
				
				printf("逆階段を表示します\n一辺の長さを入力してください\n");
				scanf_s("%d", &val);
				printf("\n\n");
				for (loop2 = 1; loop2 <= val;)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("■");
					}
					val = val--;
					printf("\n");
				}
				break;
			case 4:
				val = 1;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("■");
					}
					val = val++;
					printf("\n");
				}
				val = 4;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("■");
					}
					val = val--;
					printf("\n");
				}
				break;

			case 5:
				val = 4;
				val2 = 1;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("　");
					}
					for (loop = 1; loop <= val2; loop++)
					{
						printf("■");
					}
					val = val--;
					val2 = val2++;
					printf("\n");
				}
				break;

			case 6:
				val = 4;
				val2 = 1;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("　");
					}
					for (loop = 1; loop <= val2; loop++)
					{
						printf("■");
					}
					val = val--;
					val2 = val2 + 2;
					printf("\n");
				}
				break;

			case 7:
				val = 4;
				val2 = 1;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("　");
					}
					for (loop = 1; loop <= val2; loop++)
					{
						printf("■");
					}
					val = val--;
					val2 = val2 + 2;
					printf("\n");
				}
				val = 1;
				val2 = 7;
				for (loop2 = 1; loop2 <= 5; loop2++)
				{
					for (loop = 1; loop <= val; loop++)
					{
						printf("　");
					}
					for (loop = 1; loop <= val2; loop++)
					{
						printf("■");
					}
					val = val++;
					val2 = val2 - 2;
					printf("\n");
				}
				break;

			case 8:
				for (loop2 = 1; loop2 <= 7; loop2++)
				{

					for (loop = 1; loop <= 7; loop++)
					{
						if (loop == loop2 || loop + loop2 == 8 || loop == 4 || loop2 == 4)
						{
							printf("■");
						}
						else
						{
							printf("　");
						}
					}
					printf("\n");
				}
				break;

			case 0:
				loopend++;
				break;

			default:
				break;

			}
		}
		else
		{
			printf("\n入力が間違っています\n\n");
		}
	}
	return 0;
}