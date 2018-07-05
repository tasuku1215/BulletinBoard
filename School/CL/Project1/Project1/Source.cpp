/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名	：奇数魔法陣
クラス記号		：IT11A723
出席番号		：36
作成者			：細見　祐
作成日			：２０１７/０９/１４
仕様			：大きさや位置をユーザーに指定してもらってから奇数魔法陣をその通りに表示する
田中先生へ		：下のコメント欄に別のアルゴリズムあります
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int hen, tate_loop, yoko_loop, tatesitei, yokositei, val[11][11], cnt, tatem, yokom, mainloop, error, mainloop2,mainloop3, muki,nige;
	for (mainloop = 1; mainloop;)
	{
		printf("奇数魔法陣を表示します");
		printf("魔法陣の一辺の長さを1～11の奇数で入力してください\n０と入力すると終了します\n");
		rewind(stdin);
		scanf("%d", &hen);
		if (hen != 0)
		{
			if (3 <= hen&&hen <= 11 && hen % 2 == 1)
			{
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
				for (mainloop2 = 1; mainloop2;)
				{
					printf("表示を始めたい縦列の行数を入力してください。");
					rewind(stdin);
					scanf("%d", &tatesitei);
					if (0 < tatesitei&&tatesitei <= hen)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("\n入力された数値は無効です１～%dの間で\nもう一度", hen);
					}
				}
				for (mainloop2 = 1; mainloop2;)
				{
					printf("表示を始めたい横列の行数を入力してください。");
					rewind(stdin);
					scanf("%d", &yokositei);
					if (0 < yokositei&&yokositei <= hen)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("\n入力された数値は無効です１～%dの間で\nもう一度", hen);
					}
				}
				for (mainloop2 = 1; mainloop2;)
				{
					printf("表示方向を指定して下さい\n左上①、左下②、右上③、右下④\n");
					scanf("%d", &muki);
					if (0 < muki&&muki <= 4)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("入力された範囲は無効です、もう一度１～４の数値で入力して下さい\n");
					}
				}
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
				switch (muki)
				{
				case 1:
					for (mainloop3 = 1; mainloop3<2;mainloop3++)
					{
						printf("数値がかぶった場合の逃げる方向を指定して下さい\n１右２下\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei--;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom + 1;
									if (yokositei >= hen)
									{
										yokositei = 0;
									}
								}
							}
							break;
						case 2:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei--;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem + 1;
									yokositei = yokom;
									if (tatesitei >= hen)
									{
										tatesitei = 0;
									}
								}
							}
							break;
						default:
							printf("入力された数値は無効です、もう一度１～２で入力して下さい\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 2:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("数値がかぶった場合の逃げる方向を指定して下さい\n１上２右\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{

								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei++;
								if (yokositei< 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem - 1;
									yokositei = yokom;
									if (tatesitei < 0)
									{
										tatesitei = hen - 1;
									}
								}
							}
							break;
						case 2:	
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{

								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei++;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom+1;
									if (yokositei >= hen)
									{
										yokositei =0;
									}
								}
							}
							break;
						default:
							printf("入力された数値は無効です、もう一度１～２で入力して下さい\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 3:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("数値がかぶった場合の逃げる方向を指定して下さい\n１下２左\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:

							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei--;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem + 1;
									yokositei = yokom;
									if (tatesitei >= hen)
									{
										tatesitei = 0;
									}
								}
							}
							break;
						case 2:

							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei--;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom - 1;
									if (yokositei <0)
									{
										yokositei = hen - 1;
									}
								}
							}
							break;
						default:
							printf("入力された数値は無効です、もう一度１～２で入力して下さい\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 4:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("数値がかぶった場合の逃げる方向を指定して下さい\n１左２上\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei++;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom - 1;
									if (yokositei < 0)
									{
										yokositei = hen - 1;
									}
								}
							}
							break;
						case 2:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei++;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem-1;
									yokositei = yokom;
									if (tatesitei < 0)
									{
										tatesitei =hen-1;
									}
								}
							}
							break;
						default:
							printf("入力された数値は無効です、もう一度１～２で入力して下さい\n");
							mainloop3--;
							break;
						}
					}
					break;
				}
				printf("\n");
				for (tate_loop = 0; tate_loop < hen; tate_loop++)
				{
					for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
					{
						printf("%3d,", val[tate_loop][yoko_loop]);
					}
					printf("\n");
				}
				printf("もう一度\n");
			}
			else
			{
				printf("入力された数値は無効です\n\nもう一度");
			}
		}
		else
		{
			mainloop = 0;
		}

	}
	return 0;
}