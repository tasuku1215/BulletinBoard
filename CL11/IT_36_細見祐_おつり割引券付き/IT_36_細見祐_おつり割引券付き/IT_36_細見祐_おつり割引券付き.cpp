/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
ƒvƒƒOƒ‰ƒ€–¼	F‚¨‚Â‚èŠ„ˆøŒ”•t‚«
ƒNƒ‰ƒX‹L†		FIT11A723
oÈ”Ô†		F36
ì¬Ò			F×Œ©@—S
ì¬“ú			F‚Q‚O‚P‚V//‚Q‚Oi“ú•t‹L“ü“ú
d—l			FŠ„ˆøŒ”‚ğ“K—p‚·‚é
				F‚T‚O‚O‰~–¢–‚Ìê‡¨Š„ˆøŒ”‚ª‚ ‚Á‚Ä‚àŠ„ˆø‚È‚µB
				F‚T‚O‚O‰~`‚P‚O‚O‚O‰~–¢–‚Ìê‡¨‚P‚O‚O‰~ˆø‚«
				F‚P‚O‚O‚O‰~`‚T‚O‚O‚O‰~–¢–‚Ìê‡¨‚Q‚O‚O‰~ˆø‚«
				F‚T‚O‚O‚O‰~ˆÈã‚Ìê‡¨‚T‚O‚O‰~ˆø‚«
				FŠ„ˆøŒ”‚ğ‚Á‚Ä‚È‚¢ê‡¨‚¢‚¢l‚È‚çAˆ¹‚¿‚á‚ñ‚ğ‚¨‚Ü‚¯
“c’†M–çæ¶‚Ö	Fif•¶“ï‚µ‚¢‚Å‚·
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int shiharai;
	char waribiki,ii;

	printf("x•¥‚¢‹àŠz‚ğ“ü—Í‚µ‚Ä‚­‚¾‚³‚¢:");
	rewind(stdin);
	scanf("%d", &shiharai);
	printf("Š„ˆøŒ”‚Í‚ ‚è‚Ü‚·‚©(Y/N):");
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
					printf("x•¥‚¢‹àŠz‚Í%d‰~‚Å‚·\n", shiharai - 500);
				}
				else
				{
					printf("x•¥‚¢‹àŠz‚Í%d‰~‚Å‚·\n", shiharai - 200);
				}
			}
			else
			{
				printf("x•¥‚¢‹àŠz‚Í%d‰~‚Å‚·\n", shiharai - 100);
			}
		}
		else
		{
			printf("Š„ˆø‘ÎÛŠO‚Å‚·\n");
		}
	}
	else
	{



		if (waribiki == 'N' || waribiki == 'n')
		{
			printf("_‚ğM‚¶‚Ä‚¢‚é‚©•·‚¢‚Ä‚­‚¾‚³‚¢H‰ñ“š‚ğiY/N)‚Å“ü—Í‚µ‚Ä‚­‚¾‚³‚¢\n");
			rewind(stdin);
			scanf("%c", &ii);
			if (ii == 'Y' || ii == 'y')
			{
				printf("x•¥‚¢‹àŠz‚Í%d‰~‚Å‚·A“–“X“Á»‚Ì_ƒLƒƒƒ“ƒfƒB‚ğ“n‚µ‚Ä‚­‚¾‚³‚¢\n", shiharai);
			}
			else
			{
				printf("x•¥‚¢‹àŠz‚Í%d‰~‚Å‚·\n", shiharai);
			}
		}
		else
		{
			printf("“ü—Í‚ªŠÔˆá‚Á‚Ä‚¢‚Ü‚·\n");
		}
	}
	getchar();
	return 0;
}