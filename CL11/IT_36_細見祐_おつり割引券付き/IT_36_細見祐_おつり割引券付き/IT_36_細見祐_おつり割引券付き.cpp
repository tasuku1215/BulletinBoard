/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������	�F���芄�����t��
�N���X�L��		�FIT11A723
�o�Ȕԍ�		�F36
�쐬��			�F�׌��@�S
�쐬��			�F�Q�O�P�V//�Q�O�i���t�L����
�d�l			�F��������K�p����
				�F�T�O�O�~�����̏ꍇ���������������Ă������Ȃ��B
				�F�T�O�O�~�`�P�O�O�O�~�����̏ꍇ���P�O�O�~����
				�F�P�O�O�O�~�`�T�O�O�O�~�����̏ꍇ���Q�O�O�~����
				�F�T�O�O�O�~�ȏ�̏ꍇ���T�O�O�~����
				�F�������������ĂȂ��ꍇ�������l�Ȃ�A�����������܂�
�c���M��搶��	�Fif������ł�
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int shiharai;
	char waribiki,ii;

	printf("�x�������z����͂��Ă�������:");
	rewind(stdin);
	scanf("%d", &shiharai);
	printf("�������͂���܂���(Y/N):");
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
					printf("�x�������z��%d�~�ł�\n", shiharai - 500);
				}
				else
				{
					printf("�x�������z��%d�~�ł�\n", shiharai - 200);
				}
			}
			else
			{
				printf("�x�������z��%d�~�ł�\n", shiharai - 100);
			}
		}
		else
		{
			printf("�����ΏۊO�ł�\n");
		}
	}
	else
	{



		if (waribiki == 'N' || waribiki == 'n')
		{
			printf("�_��M���Ă��邩�����Ă��������H�񓚂��iY/N)�œ��͂��Ă�������\n");
			rewind(stdin);
			scanf("%c", &ii);
			if (ii == 'Y' || ii == 'y')
			{
				printf("�x�������z��%d�~�ł��A���X�����̐_�L�����f�B��n���Ă�������\n", shiharai);
			}
			else
			{
				printf("�x�������z��%d�~�ł�\n", shiharai);
			}
		}
		else
		{
			printf("���͂��Ԉ���Ă��܂�\n");
		}
	}
	getchar();
	return 0;
}