/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名	:繰り返そう
クラス記号		:IT11A723
出席番号		:36
作成者			:細見　祐
作成日			:2017/06/09
仕様			:秒読み＆図形
田中先生へ		:
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#include<stdio.h>
int main(void)
{
	int cnt,cnt2,val;
	printf("カウントします数値を入力してください\n");
	scanf_s("%d", &cnt);
	for (cnt = cnt; 1 <= cnt; cnt--)
	{
		printf("%d秒前\n",cnt);
	}
	printf("GO!!\n");
	val = 1;
	for (cnt2 = 1; cnt2 <= 4; cnt2++)
	{
		for (cnt = 1; cnt <= 5; cnt++)
		{
			printf("　");
		}
		for (cnt = 1; cnt <= val; cnt++)
		{
			printf("■");
		}
		val = val++;
		printf("\n");
	}
	for (cnt2 = 1; cnt2 <= 3; cnt2++)
	{
		for (cnt = 1; cnt <= 5; cnt++)
		{
			printf("　");
		}
		for (cnt = 1; cnt <= 1; cnt++)
		{
			printf("■");
		}
		printf("\n");
	}
	for (cnt2 = 1; cnt2 <= 11; cnt2++)
	{
		printf("■");
	}
	printf("\n");
	rewind(stdin);
	getchar();
	return 0;


}