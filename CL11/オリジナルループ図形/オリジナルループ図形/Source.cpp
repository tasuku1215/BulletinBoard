#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int use, loop, loop2,loop3,loop4,main;
	printf("******************************\n");
	printf("*�g�`�k�R�Z�����w���R���e�X�g*\n");
	printf("******************************\n");
	for (main = 1; main;)
	{
		printf("�I���W�i�����[�v�}�`��\�����܂������l����͂��Ă�������\n0����͂���ƏI�����܂�\n\n");
		rewind(stdin);
		scanf("%d", &use);
		if (use != 0)
		{
			for (loop = 0; loop < use; loop++)
			{
				for (loop4 = 0; loop4 < use; loop4++)
				{
					for (loop2 = 0; loop2 < use; loop2++)
					{
						for (loop3 = 0; loop3 < use; loop3++)
						{
							printf("��");
						}
						for (loop3 = 0; loop3 < use; loop3++)
						{
							printf("  ");
						}
					}
					printf("\n");
				}
				for (loop4 = 0; loop4 < use; loop4++)
				{
					for (loop2 = 0; loop2 < use; loop2++)
					{
						for (loop3 = 0; loop3 < use; loop3++)
						{
							printf("  ");
						}
						for (loop3 = 0; loop3 < use; loop3++)
						{
							printf("��");
						}
					}
					printf("\n");
				}
			}
			printf("������x");
		}
		else
		{
			main = 0;
		}
	}
	return 0;
}