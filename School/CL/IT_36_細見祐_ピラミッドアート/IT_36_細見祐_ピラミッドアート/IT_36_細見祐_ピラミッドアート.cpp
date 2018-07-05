/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名	：
クラス記号		：IT11A723
出席番号		：36
作成者			：細見　祐
作成日			：２０１７/０６/１８
仕様			：ループで■だけを使って図形を表示
田中先生へ		：前回から変数値全入れ替えしないとできませんでした(；・∀・)
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
void shikaku10(void);
int main(void)
{
	int sele, loopend;
	printf("図形表示プログラム\n");
	printf("\n①正方形\n②三角形\n③逆三角形\n④三角旗\n⑤三角形２\n⑥ピラミッド\n⑦ダイヤ型\n⑧八角形\n⑨アスタリスク\n⑩オリジナル図形\n");
	for (loopend = 1; loopend;)
	{
		printf("\n\n１～１０の数値を入力してください\n０を入力すると終了します\n");
		rewind(stdin);
		scanf("%d", &sele);                    //スイッチ指定
		if (sele <= 10 && sele >= 0)           //入力範囲
		{
			switch (sele)
			{
			case 1:
				shikaku();                     //正方形の表示部分
				break;

			case 2:
				shikaku2();                     //三角形の表示部分
				break;

			case 3:
				shikaku3();                     //逆三角形の表示部分
				break;

			case 4:
				shikaku4();                     //三角旗の表示部分
				break;

			case 5:
				shikaku5();                     //三角形２の表示部分
				break;

			case 6:
				shikaku6();                     //ピラミッドの表示部分
				break;

			case 7:
				shikaku7();                     //ダイヤ型の表示部分
				break;

			case 8:
				shikaku8();                     //八角形の表示部分
				break;

			case 9:
				shikaku9();                     //アスタリスクの表示部分
				break;

			case 10:
				shikaku10();                     //オリジナル図形の表示部分
				break;

			case 0:
				loopend = 0;
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
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～３９の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val);
		if (2 <= val && val <= 39)
		{
			printf("\n\n");
			for (loop2 = 1; loop2 <= val; loop2++)                        //縦ループ
			{
				for (loop = 1; loop <= val; loop++)                        //横ループ
				{
					printf("■");
				}
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度\n");
		}
	}
}
void shikaku2(void)
{
	int val2, val, loop3, loop2, loop;
	printf("三角形を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～３９の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val2);
		if (2 <= val2 && val2 <= 39)
		{
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
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku3(void)
{
	int val, loop, loop2, loop3;
	printf("逆三角形を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～３９の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val);
		if (2 <= val && val <= 39)
		{
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
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku4(void)
{
	int val, val2, loop, loop2, loop3;
	printf("三角旗を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを１～２４の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val2);
		if (1 <= val2 && val2 <= 24)
		{
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
			val = val2 - 1;
			for (loop2 = 1; loop2 <= val2 - 1; loop2++)                        //縦ループ
			{
				for (loop = 1; loop <= val; loop++)                        //横ループ
				{
					printf("■");
				}
				val = val--;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku5(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("三角形２を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～３９の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 39)
		{
			printf("\n\n");
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
				val2 = val2++;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku6(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("ピラミッドを表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～２０の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 20)
		{
			printf("\n\n");
			val = val3 - 1;
			val2 = 1;
			for (loop2 = 1; loop2 <= val3; loop2++)                          //縦ループ
			{
				for (loop = 1; loop <= val; loop++)                          //横ループ
				{
					printf("　");
				}
				for (loop = 1; loop <= val2; loop++)                         //横ループ
				{
					printf("■");
				}
				val = val--;
				val2 = val2 + 2;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku7(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("ダイヤ型を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～２０の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 20)
		{
			printf("\n\n");
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
			val = 1;
			val2 = (val3 - 1) * 2 - 1;
			for (loop2 = 1; loop2 <= val3 - 1; loop2++)                        //縦ループ
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
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku8(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("八角形を表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一辺の長さを２～１３の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 13)
		{
			printf("\n\n");
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
			val2 = val3 * 3 - 2;
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
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku9(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("アスタリスクを表示します\n");
	for (loop3 = 1; loop3;)
	{
		printf("一本の長さを１～１８の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (1 <= val3 && val3 <= 18)
		{
			printf("\n\n");
			val = 0;
			for (loop = 1; loop <= val3 + 1; loop++)                        //縦ループ
			{
				for (loop2 = 1; loop2 <= val; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■");
				for (loop2 = 1; loop2 <= val3 - val; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■");
				for (loop2 = 1; loop2 <= val3 - val; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■\n");
				val++;
			}
			for (loop = 1; loop <= val3 * 2 + 3; loop++)                        //縦ループ
			{
				printf("■");
			}
			printf("\n");
			val = val3;
			for (loop = 0; loop <= val3; loop++)                        //縦ループ
			{
				for (loop2 = 1; loop2 <= val; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■");
				for (loop2 = 1; loop2 <= loop; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■");
				for (loop2 = 1; loop2 <= loop; loop2++)                        //横ループ
				{
					printf("　");
				}
				printf("■\n");
				val--;
			}
			loop3 = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}
void shikaku10(void)
{

	int val, val2, val3, kuri, loop, loop2, loop3, loop4, hen, hen2, hen3;
	printf("オリジナル図形を表示します\n");
	for (kuri = 1; kuri;)
	{
		printf("一辺の長さを１～７の数値で入力してください\n");
		rewind(stdin);
		scanf("%d", &val);

		if (1 <= val && val <= 7)
		{
			for (loop4 = 1; loop4 <= val; loop4++)
			{
				hen = 3;
				for (loop = 0; loop < 2; loop++)
				{
					for (loop3 = 1; loop3 <= val; loop3++)
					{
						for (loop2 = 1; loop2 <= loop; loop2++)
						{
							printf("　");
						}
						printf("■");
						for (loop2 = 1; loop2 <= hen; loop2++)
						{
							printf("　");
						}
						printf("■");
						for (loop2 = 1; loop2 <= loop; loop2++)
						{
							printf("　");
						}
					}
					printf("\n");
					hen -= 2;
				}
				for (loop3 = 1; loop3 <= val; loop3++)
				{
					for (loop = 1; loop <= 2; loop++)
					{
						printf("　");
					}
					printf("■");
					for (loop = 1; loop <= 2; loop++)
					{
						printf("　");
					}
				}
				printf("\n");
				hen = 1;
				hen2 = 1;
				for (loop = 0; loop < 2; loop++)
				{
					for (loop3 = 1; loop3 <= val; loop3++)
					{
						for (loop2 = 1; loop2 <= hen2; loop2++)
						{
							printf("　");
						}
						printf("■");
						for (loop2 = 1; loop2 <= hen; loop2++)
						{
							printf("　");
						}
						printf("■");
						for (loop2 = 1; loop2 <= hen2; loop2++)
						{
							printf("　");
						}
					}
					printf("\n");
					hen += 2;
					hen2--;
				}
			}
			kuri = 0;
		}
		else
		{
			printf("入力された数値が規定範囲外です\nもう一度");
		}
	}
}