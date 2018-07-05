/*
ヘッダーコメント
プログラム名	:練習
作成日		:2017/04/24
作成者		:細見　祐
仕様		:変数を宣言し、変数に代入、表示を行う。
田中先生へ	:
*/
#include<stdio.h>	//stdio.hを読み込む
int main(void)
{
	int tate, yoko, menseki;	//変数宣言
	tate = 35;		//変数tateに定数35を代入
	yoko = 70;		//変数yokoに定数70を代入
	menseki = tate*yoko;	//tate×yokoを変数mensekiに代入

	printf("tateの値は%dです\n"tate);
	printf("yokoの値は%dです\n"yoko);
	printf("面積:%d×%dは、%dです。\n", tate, yoko, menseki);

	rewind(stdin);
	getchar();
	return 0;
}