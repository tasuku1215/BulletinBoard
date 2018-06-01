/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名		：一次元配列を使っちゃうよ
クラス記号		：IT11A723
出席番号		：36
作成者			：細見　祐
作成日			：２０１７/０６/１８
仕様			：入力した点数の最大値と最小値を表示９９９を入力すると入力終了
田中先生へ		：グローバル変数なんて知りませんでした＞＜
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int data(void);
int t[30];
int  main(void)
{
	int max, min, i, n;
	n = data();
	max = t[0];
	min = t[0];
	for (i = 0; i < n; i++)
	{
		if (max < t[i])
		{
			max = t[i];
		}
		if (min > t[i])
		{
			min = t[i];
		}
	}
	printf("\nmax%d\nmin%d", max, min);
	rewind(stdin);
	getchar();
}
int data(void)
{
	int ten, i, n;
	rewind(stdin);
	scanf("%d", &ten);
	for (i = 0; ten != 999 && i<29;)
	{
		t[i] = ten;
		i++;
		rewind(stdin);
		scanf("%d", &ten);
	}
	n = i;
	return n;
}