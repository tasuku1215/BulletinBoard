/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������	�F
�N���X�L��		�FIT11A723
�o�Ȕԍ�		�F36
�쐬��			�F�׌��@�S
�쐬��			�F�Q�O�P�V/�O�U/�P�W
�d�l			�F���[�v�Ł��������g���Đ}�`��\��
�c���搶��		�F�O�񂩂�ϐ��l�S����ւ����Ȃ��Ƃł��܂���ł���(�G�E�́E)
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
void shikaku10(void);
int main(void)
{
	int sele, loopend;
	printf("�}�`�\���v���O����\n");
	printf("\n�@�����`\n�A�O�p�`\n�B�t�O�p�`\n�C�O�p��\n�D�O�p�`�Q\n�E�s���~�b�h\n�F�_�C���^\n�G���p�`\n�H�A�X�^���X�N\n�I�I���W�i���}�`\n");
	for (loopend = 1; loopend;)
	{
		printf("\n\n�P�`�P�O�̐��l����͂��Ă�������\n�O����͂���ƏI�����܂�\n");
		rewind(stdin);
		scanf("%d", &sele);                    //�X�C�b�`�w��
		if (sele <= 10 && sele >= 0)           //���͔͈�
		{
			switch (sele)
			{
			case 1:
				shikaku();                     //�����`�̕\������
				break;

			case 2:
				shikaku2();                     //�O�p�`�̕\������
				break;

			case 3:
				shikaku3();                     //�t�O�p�`�̕\������
				break;

			case 4:
				shikaku4();                     //�O�p���̕\������
				break;

			case 5:
				shikaku5();                     //�O�p�`�Q�̕\������
				break;

			case 6:
				shikaku6();                     //�s���~�b�h�̕\������
				break;

			case 7:
				shikaku7();                     //�_�C���^�̕\������
				break;

			case 8:
				shikaku8();                     //���p�`�̕\������
				break;

			case 9:
				shikaku9();                     //�A�X�^���X�N�̕\������
				break;

			case 10:
				shikaku10();                     //�I���W�i���}�`�̕\������
				break;

			case 0:
				loopend = 0;
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
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�R�X�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val);
		if (2 <= val && val <= 39)
		{
			printf("\n\n");
			for (loop2 = 1; loop2 <= val; loop2++)                        //�c���[�v
			{
				for (loop = 1; loop <= val; loop++)                        //�����[�v
				{
					printf("��");
				}
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x\n");
		}
	}
}
void shikaku2(void)
{
	int val2, val, loop3, loop2, loop;
	printf("�O�p�`��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�R�X�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val2);
		if (2 <= val2 && val2 <= 39)
		{
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
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku3(void)
{
	int val, loop, loop2, loop3;
	printf("�t�O�p�`��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�R�X�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val);
		if (2 <= val && val <= 39)
		{
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
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku4(void)
{
	int val, val2, loop, loop2, loop3;
	printf("�O�p����\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������P�`�Q�S�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val2);
		if (1 <= val2 && val2 <= 24)
		{
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
			val = val2 - 1;
			for (loop2 = 1; loop2 <= val2 - 1; loop2++)                        //�c���[�v
			{
				for (loop = 1; loop <= val; loop++)                        //�����[�v
				{
					printf("��");
				}
				val = val--;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku5(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("�O�p�`�Q��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�R�X�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 39)
		{
			printf("\n\n");
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
				val2 = val2++;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku6(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("�s���~�b�h��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�Q�O�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 20)
		{
			printf("\n\n");
			val = val3 - 1;
			val2 = 1;
			for (loop2 = 1; loop2 <= val3; loop2++)                          //�c���[�v
			{
				for (loop = 1; loop <= val; loop++)                          //�����[�v
				{
					printf("�@");
				}
				for (loop = 1; loop <= val2; loop++)                         //�����[�v
				{
					printf("��");
				}
				val = val--;
				val2 = val2 + 2;
				printf("\n");
			}
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku7(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("�_�C���^��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�Q�O�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 20)
		{
			printf("\n\n");
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
			val = 1;
			val2 = (val3 - 1) * 2 - 1;
			for (loop2 = 1; loop2 <= val3 - 1; loop2++)                        //�c���[�v
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
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku8(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("���p�`��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��ӂ̒������Q�`�P�R�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (2 <= val3 && val3 <= 13)
		{
			printf("\n\n");
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
			val2 = val3 * 3 - 2;
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
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku9(void)
{
	int val, val2, val3, loop, loop2, loop3;
	printf("�A�X�^���X�N��\�����܂�\n");
	for (loop3 = 1; loop3;)
	{
		printf("��{�̒������P�`�P�W�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val3);
		if (1 <= val3 && val3 <= 18)
		{
			printf("\n\n");
			val = 0;
			for (loop = 1; loop <= val3 + 1; loop++)                        //�c���[�v
			{
				for (loop2 = 1; loop2 <= val; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��");
				for (loop2 = 1; loop2 <= val3 - val; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��");
				for (loop2 = 1; loop2 <= val3 - val; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��\n");
				val++;
			}
			for (loop = 1; loop <= val3 * 2 + 3; loop++)                        //�c���[�v
			{
				printf("��");
			}
			printf("\n");
			val = val3;
			for (loop = 0; loop <= val3; loop++)                        //�c���[�v
			{
				for (loop2 = 1; loop2 <= val; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��");
				for (loop2 = 1; loop2 <= loop; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��");
				for (loop2 = 1; loop2 <= loop; loop2++)                        //�����[�v
				{
					printf("�@");
				}
				printf("��\n");
				val--;
			}
			loop3 = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}
void shikaku10(void)
{

	int val, val2, val3, kuri, loop, loop2, loop3, loop4, hen, hen2, hen3;
	printf("�I���W�i���}�`��\�����܂�\n");
	for (kuri = 1; kuri;)
	{
		printf("��ӂ̒������P�`�V�̐��l�œ��͂��Ă�������\n");
		rewind(stdin);
		scanf("%d", &val);

		if (1 <= val && val <= 7)
		{
			for (loop4 = 1; loop4 <= val; loop4++)
			{
				hen = 3;
				for (loop = 0; loop < 2; loop++)
				{
					for (loop3 = 1; loop3 <= val; loop3++)
					{
						for (loop2 = 1; loop2 <= loop; loop2++)
						{
							printf("�@");
						}
						printf("��");
						for (loop2 = 1; loop2 <= hen; loop2++)
						{
							printf("�@");
						}
						printf("��");
						for (loop2 = 1; loop2 <= loop; loop2++)
						{
							printf("�@");
						}
					}
					printf("\n");
					hen -= 2;
				}
				for (loop3 = 1; loop3 <= val; loop3++)
				{
					for (loop = 1; loop <= 2; loop++)
					{
						printf("�@");
					}
					printf("��");
					for (loop = 1; loop <= 2; loop++)
					{
						printf("�@");
					}
				}
				printf("\n");
				hen = 1;
				hen2 = 1;
				for (loop = 0; loop < 2; loop++)
				{
					for (loop3 = 1; loop3 <= val; loop3++)
					{
						for (loop2 = 1; loop2 <= hen2; loop2++)
						{
							printf("�@");
						}
						printf("��");
						for (loop2 = 1; loop2 <= hen; loop2++)
						{
							printf("�@");
						}
						printf("��");
						for (loop2 = 1; loop2 <= hen2; loop2++)
						{
							printf("�@");
						}
					}
					printf("\n");
					hen += 2;
					hen2--;
				}
			}
			kuri = 0;
		}
		else
		{
			printf("���͂��ꂽ���l���K��͈͊O�ł�\n������x");
		}
	}
}