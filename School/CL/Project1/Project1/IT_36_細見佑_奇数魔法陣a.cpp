#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int hen, tate_loop, yoko_loop, tatesitei, yokositei, val[10][10], cnt,tatem,yokom;

	printf("奇数魔法陣を表示します。魔法陣の一辺の長さを1～10の間で指定してください。\n");
	rewind(stdin);
	scanf("%d", &hen);
	for (tate_loop = hen - 1; tate_loop >= 0; tate_loop--)
	{
		for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
		{
			val[tate_loop][yoko_loop] = 0;
		}
	}

	for (tate_loop = 0; tate_loop < hen; tate_loop++)
	{
		for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
		{
			printf("□");
		}
		printf("\n");
	}
	printf("表示を始めたい縦列の行数を入力してください。");
	rewind(stdin);
	scanf("%d", &tatesitei);
	printf("表示を始めたい横列の行数を入力してください。");
	rewind(stdin);
	scanf("%d", &yokositei);
	/*
	tatesitei = hen - (tatesitei - 1);
	tatesitei = tatesitei + hen;
	yokositei = yokositei + hen;

	for (cnt = 1; cnt <= hen * hen; cnt++)
	{
		if (val[(tatesitei - 1) % hen][(yokositei-1) % hen] > 0)
		{
			tatesitei -= 2;
			yokositei -= 1;
		}
		val[(tatesitei - 1) % hen][(yokositei-1) % hen] = cnt;
		tatesitei += 1;
		yokositei += 1;
	}



	for (tate_loop = hen - 1; tate_loop >= 0; tate_loop--)
	{
		for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
		{
			printf("%3d,", val[tate_loop][yoko_loop]);
		}
		printf("\n");
	}
	*/
	tatesitei--;
	yokositei--;
	for (cnt = 1; cnt <= hen * hen; cnt++)
	{
		val[tatesitei][yokositei] = cnt;
		yokom = yokositei;
		tatem = tatesitei;
		yokositei++;
		tatesitei--;

		if (yokositei>=hen)
		{
			yokositei = 0;
		}
		if(tatesitei<0)
		{
			tatesitei = hen - 1;
		}
		if (val[tatesitei][yokositei] != 0)
		{
			tatesitei = tatem+1;
			yokositei = yokom;
			if (tatesitei>=hen)
			{
				tatesitei=0;
			}
			
		}
		
	}
	for (tate_loop = 0;tate_loop< hen; tate_loop++)
	{
		for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
		{
			printf("%3d,", val[tate_loop][yoko_loop]);
		}
		printf("\n");
	}

	rewind(stdin);
	getchar();
	return 0;
}