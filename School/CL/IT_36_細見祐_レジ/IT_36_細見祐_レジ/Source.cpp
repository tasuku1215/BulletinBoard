#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>

int main(void)
{
	int val,bal,tas,kake,waru,hiku,ama;
	printf("四則演算します数値を入力してください\n");
	rewind(stdin);
	scanf("%d", &val);

	printf("二つ目の数値を入力してください\n");

	rewind(stdin);
	scanf("%d", &bal);
	tas = val + bal;

	printf("足したら%d\n", tas);
	hiku = val - bal;
	printf("引いたら%d\n", hiku);
	kake = val*bal;
	printf("掛けたら%d\n", kake);
	waru = val/bal;
	ama = val%bal;
	printf("割ったら%dあまり%d\n", waru,ama);
	rewind(stdin);
	getchar();
	return 0;

}