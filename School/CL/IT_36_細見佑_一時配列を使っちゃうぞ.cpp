/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������		�F�ꎟ���z����g�����Ⴄ��
�N���X�L��		�FIT11A723
�o�Ȕԍ�		�F36
�쐬��			�F�׌��@�S
�쐬��			�F�Q�O�P�V/�O�U/�P�W
�d�l			�F���͂����_���̍ő�l�ƍŏ��l��\���X�X�X����͂���Ɠ��͏I��
�c���搶��		�F�O���[�o���ϐ��Ȃ�Ēm��܂���ł�������
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int data(void);
int t[30];
int  main(void)
{
	int max, min, i, n;
	n = data();
	max = t[0];
	min = t[0];
	for (i = 0; i < n; i++)
	{
		if (max < t[i])
		{
			max = t[i];
		}
		if (min > t[i])
		{
			min = t[i];
		}
	}
	printf("\nmax%d\nmin%d", max, min);
	rewind(stdin);
	getchar();
}
int data(void)
{
	int ten, i, n;
	rewind(stdin);
	scanf("%d", &ten);
	for (i = 0; ten != 999 && i<29;)
	{
		t[i] = ten;
		i++;
		rewind(stdin);
		scanf("%d", &ten);
	}
	n = i;
	return n;
}