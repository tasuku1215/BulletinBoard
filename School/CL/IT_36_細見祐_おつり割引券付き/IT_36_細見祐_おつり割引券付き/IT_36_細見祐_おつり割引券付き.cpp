/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
プログラム名	：おつり割引券付き
クラス記号		：IT11A723
出席番号		：36
作成者			：細見　祐
作成日			：２０１７//２０（日付記入日
仕様			：割引券を適用する
				：５００円未満の場合→割引券があっても割引なし。
				：５００円〜１０００円未満の場合→１００円引き
				：１０００円〜５０００円未満の場合→２００円引き
				：５０００円以上の場合→５００円引き
				：割引券を持ってない場合→いい人なら、飴ちゃんをおまけ
田中信也先生へ	：if文難しいです
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int shiharai;
	char waribiki,ii;

	printf("支払い金額を入力してください:");
	rewind(stdin);
	scanf("%d", &shiharai);
	printf("割引券はありますか(Y/N):");
	rewind(stdin);
	scanf("%c", &waribiki);

	if (waribiki == 'Y' || waribiki == 'y')
	{
		if (shiharai >= 500)
		{
			if (shiharai >= 1000)
			{
				if (shiharai >= 5000)
				{
					printf("支払い金額は%d円です\n", shiharai - 500);
				}
				else
				{
					printf("支払い金額は%d円です\n", shiharai - 200);
				}
			}
			else
			{
				printf("支払い金額は%d円です\n", shiharai - 100);
			}
		}
		else
		{
			printf("割引対象外です\n");
		}
	}
	else
	{



		if (waribiki == 'N' || waribiki == 'n')
		{
			printf("神を信じているか聞いてください？回答を（Y/N)で入力してください\n");
			rewind(stdin);
			scanf("%c", &ii);
			if (ii == 'Y' || ii == 'y')
			{
				printf("支払い金額は%d円です、当店特製の神キャンディを渡してください\n", shiharai);
			}
			else
			{
				printf("支払い金額は%d円です\n", shiharai);
			}
		}
		else
		{
			printf("入力が間違っています\n");
		}
	}
	getchar();
	return 0;
}