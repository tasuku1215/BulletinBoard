#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>

int main(void)
{
	int val,bal,tas,kake,waru,hiku,ama;
	printf("�l�����Z���܂����l����͂��Ă�������\n");
	rewind(stdin);
	scanf("%d", &val);

	printf("��ڂ̐��l����͂��Ă�������\n");

	rewind(stdin);
	scanf("%d", &bal);
	tas = val + bal;

	printf("��������%d\n", tas);
	hiku = val - bal;
	printf("��������%d\n", hiku);
	kake = val*bal;
	printf("�|������%d\n", kake);
	waru = val/bal;
	ama = val%bal;
	printf("��������%d���܂�%d\n", waru,ama);
	rewind(stdin);
	getchar();
	return 0;

}