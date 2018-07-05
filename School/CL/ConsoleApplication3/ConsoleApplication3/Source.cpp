#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int ten, ten2, ten3, ten4,gou;
	printf("HAL評価課題の合計と平均を出力します\n");
	printf("評価課題１本目の点数を入力して下さい\n");
	rewind(stdin);
	scanf("%d",&ten);
	printf("評価課題２本目の点数を入力して下さい\n");
	rewind(stdin);
	scanf("%d", &ten2);
	printf("評価課題３本目の点数を入力して下さい\n");
	rewind(stdin);
	scanf("%d", &ten3);
	printf("評価課題４本目の点数を入力して下さい\n");
	rewind(stdin);
	scanf("%d", &ten4);
	printf("あなたの評価課題の結果は、、、\n");
	gou = ten + ten2 + ten3 + ten4;
	printf("１本目:%d点\n２本目:%d点\n３本目:%d点\n４本目:%d点\n合計:%d点/400点\n平均:%d点\n", ten, ten2, ten3, ten4, gou, gou / 4);
	if (gou / 4 < 60)
	{
		printf("「未認定です！！」\n");
	}
	else
	{
		printf("「認定です！！」\n");
	}
	rewind(stdin);
	getchar();
	return 0;
}