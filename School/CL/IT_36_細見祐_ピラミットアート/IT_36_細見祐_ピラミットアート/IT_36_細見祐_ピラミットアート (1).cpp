/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������	�F
�N���X�L��		�FIT11A723
�o�Ȕԍ�		�F36
�쐬��			�F�׌��@�S
�쐬��			�F�Q�O�P�V/�O�U/�P�W
�d�l			�F���[�v�Ł��������g���Đ}�`��\��
�c���搶��		�F����}�ɓ�Փx�オ��܂����ˁG
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
void shikaku(void);                  //�v���g�^�C�v�錾
void shikaku2(void);
void shikaku3(void);
void shikaku4(void);
void shikaku5(void);
void shikaku6(void);
void shikaku7(void);
void shikaku8(void);
void shikaku9(void);
int main(void)
{
	int sele, loopend;
	printf("�}�`�\���v���O����\n");
	printf("\n�@�l�p�`\n�A�K�i\n�B�t�K�i\n�C�K�i�X\n�D��΂��K�i\n�E��΂��K�i�X\n�F45�x�l�p�`\n�G���p�`\n�H�A�X�^���X�N\n");
	for (loopend = 1; loopend;)
	{
		printf("\n\n�P�`�X�̐��l����͂��Ă�������\n�O����͂���ƏI�����܂�\n");
		rewind(stdin);
		scanf("%d", &sele);                    //�X�C�b�`�w��
		if (sele <= 10 && sele >= 0)           //���͔͈�
		{
			switch (sele)
			{
			case 1:
				shikaku();                     //�l�p�`�̕\������
				break;

			case 2:
				shikaku2();                     //�K�i�̕\������
				break;

			case 3:
				shikaku3();                     //�t�K�i�̕\������
				break;

			case 4:
				shikaku4();                     //�K�i�X�̕\������
				break;

			case 5:
				shikaku5();                     //��΂��K�i�̕\������
				break;

			case 6:
				shikaku6();                     //��΂��K�i�X�̕\������
				break;

			case 7:
				shikaku7();                     //45�x�l�p�`�̕\������
				break;

			case 8:
				shikaku8();                     //���p�`�̕\������
				break;

			case 9:
				shikaku9();                     //�A�X�^���X�N�̕\������
				break;

			case 0:
				loopend=0;
				break;

			default:
				break;

			}
		}
		else
		{
			printf("\n���͂��Ԉ���Ă��܂�\n\n������x");
		}
	}
	return 0;
}
void shikaku(void)
{
	int loop, loop2, loop3, val, val2;
	printf("�����`��\�����܂�\n");
	for (loop3 = 1; loop3 <= 1;)
	{

		printf("�c�̒�������͂��Ă�������\n");
		scanf("%d", &val);
		printf("���̒�������͂��Ă�������\n");
		scanf("%d", &val2);
		if (val >= 2 && val2 >= 2)
		{
			printf("\n\n");
			for (loop2 = 1; loop2 <= val; loop2++)                        //�c���[�v
			{
				for (loop = 1; loop <= val2; loop++)                        //�����[�v
				{
					printf("��");
				}
				printf("\n");
			}
			loop3++;
		}
		else
		{
			printf("���͂��ꂽ���l�����������܂�\n������x\n");
		}
	}

}
void shikaku2(void)
{
	int val2, val, loop2,loop;
 	printf("�K�i��\�����܂�\n��ӂ̒������Q�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val2);
	printf("\n\n");
	val = 1;
	for (loop2 = 1; loop2 <= val2; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val++;
		printf("\n");
	}
}
void shikaku3(void)
{
	int val,loop,loop2;
	printf("�t�K�i��\�����܂�\n��ӂ̒������Q�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val);
	printf("\n\n");
	for (loop2 = 1; loop2 <= val;)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		printf("\n");
	}
}
void shikaku4(void)
{
	int val,val2,loop,loop2;
	printf("�K�i�X��\�����܂�\n��ӂ̒������R�ȏ�̊�œ��͂��Ă�������\n");
	scanf("%d", &val2);
	val=1;
	for (loop2 = 1; loop2 <= (val2 - 1) / 2 + 1; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val++;
		printf("\n");
	}
	val = (val2 - 1) / 2;
	for (loop2 = 1; loop2 <= (val2 - 1) / 2; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		printf("\n");
	}
}
void shikaku5(void)
{
	int val,val2,val3,loop,loop2;
	printf("��΂��K�i��\�����܂�\n��ӂ̒������Q�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val3);
	val = val3-1;
	val2 = 1;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		val2 = val2++;
		printf("\n");
	}
}
void shikaku6(void)
{
	int val, val2,val3, loop, loop2;
	printf("��΂��K�i�X��\�����܂�\n��ӂ̒������Q�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val3);
	val = val3 - 1;
	val2 = 1;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
}
void shikaku7(void)
{
	int val, val2,val3, loop, loop2;
	printf("45�x�l�p�`��\�����܂�\n��ӂ̒������R�ȏ�̊�œ��͂��Ă�������\n");
	scanf("%d", &val3);
	val = (val3-1)/2;
	val2 = 1;
	for (loop2 = 1; loop2 <= (val3 - 1) / 2+1; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
	val = 1;
	val2 = val3-2;
	for (loop2 = 1; loop2 <= (val3 - 1) / 2 + 1; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val++;
		val2=val2- 2;
		printf("\n");
	}
}
void shikaku8(void)
{
	int val, val2, val3, loop, loop2;
	printf("45�x�l�p�`��\�����܂�\n��ӂ̒�����2�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val3);
	val = val3;
	val2 = val3;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val--;
		val2 = val2 + 2;
		printf("\n");
	}
	for (loop2 = 1; loop2 <= val3; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val3 * 3; loop++)                        //�����[�v
		{
			printf("��");
		}
		
		printf("\n");
	}
	val = 1;
	val2 = val3*3-2;
	for (loop2 = 1; loop2 <= val3; loop2++)                        //�c���[�v
	{
		for (loop = 1; loop <= val; loop++)                        //�����[�v
		{
			printf("�@");
		}
		for (loop = 1; loop <= val2; loop++)                        //�����[�v
		{
			printf("��");
		}
		val = val++;
		val2 = val2 - 2;
		printf("\n");
	}
}
void shikaku9(void)
{
	int val,val2,val3,loop,loop2,loop3;
	printf("�A�X�^���X�N��\�����܂�\n��ӂ̒������T�ȏ�œ��͂��Ă�������\n");
	scanf("%d", &val3);
	val = 0;
	for (loop = 1; loop <= (val3 - 1) / 2; loop++)                        //�c���[�v
	{
		for (loop2 = 1; loop2 <= val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��\n");
		val++;
	}
	for (loop = 1; loop <= (val3 - 3) / 2 * 2 + 3; loop++)                        //�c���[�v
	{
		printf("��");
	}
	printf("\n");
	val = (val3-3)/2;
	for (loop = 1; loop <= (val3 - 1) / 2; loop++)                        //�c���[�v
	{
		for (loop2 = 1; loop2 <= val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��");
		for (loop2 = 1; loop2 <= (val3 - 3) / 2 - val; loop2++)                        //�����[�v
		{
			printf("�@");
		}
		printf("��\n");
		val--;
	}
	
}