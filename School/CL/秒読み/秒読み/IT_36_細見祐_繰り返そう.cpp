/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������	:�J��Ԃ���
�N���X�L��		:IT11A723
�o�Ȕԍ�		:36
�쐬��			:�׌��@�S
�쐬��			:2017/06/09
�d�l			:�b�ǂ݁��}�`
�c���搶��		:
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#include<stdio.h>
int main(void)
{
	int cnt,cnt2,val;
	printf("�J�E���g���܂����l����͂��Ă�������\n");
	scanf_s("%d", &cnt);
	for (cnt = cnt; 1 <= cnt; cnt--)
	{
		printf("%d�b�O\n",cnt);
	}
	printf("GO!!\n");
	val = 1;
	for (cnt2 = 1; cnt2 <= 4; cnt2++)
	{
		for (cnt = 1; cnt <= 5; cnt++)
		{
			printf("�@");
		}
		for (cnt = 1; cnt <= val; cnt++)
		{
			printf("��");
		}
		val = val++;
		printf("\n");
	}
	for (cnt2 = 1; cnt2 <= 3; cnt2++)
	{
		for (cnt = 1; cnt <= 5; cnt++)
		{
			printf("�@");
		}
		for (cnt = 1; cnt <= 1; cnt++)
		{
			printf("��");
		}
		printf("\n");
	}
	for (cnt2 = 1; cnt2 <= 11; cnt2++)
	{
		printf("��");
	}
	printf("\n");
	rewind(stdin);
	getchar();
	return 0;


}