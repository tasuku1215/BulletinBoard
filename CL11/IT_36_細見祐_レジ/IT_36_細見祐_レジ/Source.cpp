#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>

int main(void)
{
	int val,bal,tas,kake,waru,hiku,ama;
	printf("l‘¥‰‰Z‚µ‚Ü‚·”’l‚ğ“ü—Í‚µ‚Ä‚­‚¾‚³‚¢\n");
	rewind(stdin);
	scanf("%d", &val);

	printf("“ñ‚Â–Ú‚Ì”’l‚ğ“ü—Í‚µ‚Ä‚­‚¾‚³‚¢\n");

	rewind(stdin);
	scanf("%d", &bal);
	tas = val + bal;

	printf("‘«‚µ‚½‚ç%d\n", tas);
	hiku = val - bal;
	printf("ˆø‚¢‚½‚ç%d\n", hiku);
	kake = val*bal;
	printf("Š|‚¯‚½‚ç%d\n", kake);
	waru = val/bal;
	ama = val%bal;
	printf("Š„‚Á‚½‚ç%d‚ ‚Ü‚è%d\n", waru,ama);
	rewind(stdin);
	getchar();
	return 0;

}