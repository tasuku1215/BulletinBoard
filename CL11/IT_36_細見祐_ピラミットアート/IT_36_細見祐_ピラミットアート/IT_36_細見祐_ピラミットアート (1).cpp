/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名	：
クラス記号		：IT11A723
出席番号		：36
作成者			：細見　祐
作成日			：２０１７/０６/１８
仕様			：ループで■だけを使って図形を表示
田中先生へ		：今回急に難易度上がりましたね；
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
void shikaku(void);                  //プロトタイプ宣言
void shikaku2(void);
void shikaku3(void);
void shikaku4(void);
void shikaku5(void);
void shikaku6(void);
void shikaku7(void);
void shikaku8(void);
void shikaku9(void);
int main(void)
{
	int sele, loopend;
	printf("図形表示プログラム\n");
	printf("\n①四角形\n②階段\n③逆階段\n④階段々\n⑤飛ばし階段\n⑥飛ばし階段々\n⑦45度四角形\n⑧八角形\n⑨アスタリスク\n");
	for (loopend = 1; loopend;)
	{
		printf("\n\n１～９の数値を入力してください\n０を入力すると終了します\n");
		rewind(stdin);
		scanf("%d", &sele);                    //スイッチ指定
		if (sele <= 10 && sele >= 0)           //入力範囲
		{
			switch (sele)
			{
			case 1:
				shikaku();                     //四角形の表示部分
				break;

			case 2:
				shikaku2();                     //階段の表示部分
				break;

			case 3:
				shikaku3();                     //逆階段の表示部分
				break;

			case 4:
				shikaku4();                     //階段々の表示部分
				break;

			case 5:
				shikaku5();                     //飛ばし階段の表示部分
				break;

			case 6:
				shikaku6();                     //飛ばし階段々の表示部分
				break;

			case 7:
				shikaku7();                     //45度四角形の表示部分
				break;

			case 8:
				shikaku8();                     //八角形の表示部分
				break;

			case 9:
				shikaku9();                     //アスタリスクの表示部分
				break;

			case 0:
				loopend=0;
				break;

			default:
				break;

			}
		}
		else
		{
			printf("\n入力が間違っています\n\nもう一度");
		}
	}
	return 0;
}
void shikaku(void)
{
	int loop, loop2, loop3, val, val2;
	printf("正方形を表示します\n");
	for (loop3 = 1; loop3 <= 1;)
	{

		printf("縦の長さを入力してください\n");
		scanf("%d", &val);
		printf("横の長さを入力してください\n");
		scanf("%d", &val2);
		if (val >= 2 && val2 >= 2)
		{
			printf("\n\n");
			for (loop2 = 1; loop2 <= val; loop2++)                        //縦ループ
			{
				for (loop = 1; loop <= val2; loop++)                        //横ループ
				{
					printf("■");
				}
				printf("\n");
			}
			loop3++;
		}
		else
		{
			printf("入力された数値が小さすぎます\nもう一度\n");
		}
	}

}
void shikaku2(void)
{
	int val2, val, loop2,loop;
 	printf("階段を表示します\n一辺の長さを２以上で入力してください\n");
	scanf("%d", &val2);
	printf("\n\n");
	val = 1;
	for (loop2 = 1; loop2 <= val2; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val++;
		printf("\n");
	}
}
void shikaku3(void)
{
	int val,loop,loop2;
	printf("逆階段を表示します\n一辺の長さを２以上で入力してください\n");
	scanf("%d", &val);
	printf("\n\n");
	for (loop2 = 1; loop2 <= val;)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		printf("\n");
	}
}
void shikaku4(void)
{
	int val,val2,loop,loop2;
	printf("階段々を表示します\n一辺の長さを３以上の奇数で入力してください\n");
	scanf("%d", &val2);
	val=1;
	for (loop2 = 1; loop2 <= (val2 - 1) / 2 + 1; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val++;
		printf("\n");
	}
	val = (val2 - 1) / 2;
	for (loop2 = 1; loop2 <= (val2 - 1) / 2; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		printf("\n");
	}
}
void shikaku5(void)
{
	int val,val2,val3,loop,loop2;
	printf("飛ばし階段を表示します\n一辺の長さを２以上で入力してください\n");
	scanf("%d", &val3);
	val = val3-1;
	val2 = 1;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		val2 = val2++;
		printf("\n");
	}
}
void shikaku6(void)
{
	int val, val2,val3, loop, loop2;
	printf("飛ばし階段々を表示します\n一辺の長さを２以上で入力してください\n");
	scanf("%d", &val3);
	val = val3 - 1;
	val2 = 1;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
}
void shikaku7(void)
{
	int val, val2,val3, loop, loop2;
	printf("45度四角形を表示します\n一辺の長さを３以上の奇数で入力してください\n");
	scanf("%d", &val3);
	val = (val3-1)/2;
	val2 = 1;
	for (loop2 = 1; loop2 <= (val3 - 1) / 2+1; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
	val = 1;
	val2 = val3-2;
	for (loop2 = 1; loop2 <= (val3 - 1) / 2 + 1; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val++;
		val2=val2- 2;
		printf("\n");
	}
}
void shikaku8(void)
{
	int val, val2, val3, loop, loop2;
	printf("45度四角形を表示します\n一辺の長さを2以上で入力してください\n");
	scanf("%d", &val3);
	val = val3;
	val2 = val3;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
	for (loop2 = 1; loop2 <= val3; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val3 * 3; loop++)                        //横ループ
		{
			printf("■");
		}
		
		printf("\n");
	}
	val = 1;
	val2 = val3*3-2;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //縦ループ
	{
		for (loop = 1; loop <= val; loop++)                        //横ループ
		{
			printf("　");
		}
		for (loop = 1; loop <= val2; loop++)                        //横ループ
		{
			printf("■");
		}
		val = val++;
		val2 = val2 - 2;
		printf("\n");
	}
}
void shikaku9(void)
{
	int val,val2,val3,loop,loop2,loop3;
	printf("アスタリスクを表示します\n一辺の長さを５以上で入力してください\n");
	scanf("%d", &val3);
	val = 0;
	for (loop = 1; loop <= (val3 - 1) / 2; loop++)                        //縦ループ
	{
		for (loop2 = 1; loop2 <= val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■\n");
		val++;
	}
	for (loop = 1; loop <= (val3 - 3) / 2 * 2 + 3; loop++)                        //縦ループ
	{
		printf("■");
	}
	printf("\n");
	val = (val3-3)/2;
	for (loop = 1; loop <= (val3 - 1) / 2; loop++)                        //縦ループ
	{
		for (loop2 = 1; loop2 <= val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //横ループ
		{
			printf("　");
		}
		printf("■\n");
		val--;
	}
	
}