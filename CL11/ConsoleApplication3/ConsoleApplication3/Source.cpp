#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int ten, ten2, ten3, ten4,gou;
	printf("HAL�]���ۑ�̍��v�ƕ��ς��o�͂��܂�\n");
	printf("�]���ۑ�P�{�ڂ̓_������͂��ĉ�����\n");
	rewind(stdin);
	scanf("%d",&ten);
	printf("�]���ۑ�Q�{�ڂ̓_������͂��ĉ�����\n");
	rewind(stdin);
	scanf("%d", &ten2);
	printf("�]���ۑ�R�{�ڂ̓_������͂��ĉ�����\n");
	rewind(stdin);
	scanf("%d", &ten3);
	printf("�]���ۑ�S�{�ڂ̓_������͂��ĉ�����\n");
	rewind(stdin);
	scanf("%d", &ten4);
	printf("���Ȃ��̕]���ۑ�̌��ʂ́A�A�A\n");
	gou = ten + ten2 + ten3 + ten4;
	printf("�P�{��:%d�_\n�Q�{��:%d�_\n�R�{��:%d�_\n�S�{��:%d�_\n���v:%d�_/400�_\n����:%d�_\n", ten, ten2, ten3, ten4, gou, gou / 4);
	if (gou / 4 < 60)
	{
		printf("�u���F��ł��I�I�v\n");
	}
	else
	{
		printf("�u�F��ł��I�I�v\n");
	}
	rewind(stdin);
	getchar();
	return 0;
}