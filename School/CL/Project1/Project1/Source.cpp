/*
::::::::::::::::::::::::::::::::::::::::::::::::::::::
�v���O������	�F����@�w
�N���X�L��		�FIT11A723
�o�Ȕԍ�		�F36
�쐬��			�F�׌��@�S
�쐬��			�F�Q�O�P�V/�O�X/�P�S
�d�l			�F�傫����ʒu�����[�U�[�Ɏw�肵�Ă�����Ă������@�w�����̒ʂ�ɕ\������
�c���搶��		�F���̃R�����g���ɕʂ̃A���S���Y������܂�
::::::::::::::::::::::::::::::::::::::::::::::::::::::
*/
#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
int main(void)
{
	int hen, tate_loop, yoko_loop, tatesitei, yokositei, val[11][11], cnt, tatem, yokom, mainloop, error, mainloop2,mainloop3, muki,nige;
	for (mainloop = 1; mainloop;)
	{
		printf("����@�w��\�����܂�");
		printf("���@�w�̈�ӂ̒�����1�`11�̊�œ��͂��Ă�������\n�O�Ɠ��͂���ƏI�����܂�\n");
		rewind(stdin);
		scanf("%d", &hen);
		if (hen != 0)
		{
			if (3 <= hen&&hen <= 11 && hen % 2 == 1)
			{
				for (tate_loop = hen - 1; tate_loop >= 0; tate_loop--)
				{
					for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
					{
						val[tate_loop][yoko_loop] = 0;
					}
				}

				for (tate_loop = 0; tate_loop < hen; tate_loop++)
				{
					for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
					{
						printf("��");
					}
					printf("\n");
				}
				for (mainloop2 = 1; mainloop2;)
				{
					printf("�\�����n�߂����c��̍s������͂��Ă��������B");
					rewind(stdin);
					scanf("%d", &tatesitei);
					if (0 < tatesitei&&tatesitei <= hen)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("\n���͂��ꂽ���l�͖����ł��P�`%d�̊Ԃ�\n������x", hen);
					}
				}
				for (mainloop2 = 1; mainloop2;)
				{
					printf("�\�����n�߂�������̍s������͂��Ă��������B");
					rewind(stdin);
					scanf("%d", &yokositei);
					if (0 < yokositei&&yokositei <= hen)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("\n���͂��ꂽ���l�͖����ł��P�`%d�̊Ԃ�\n������x", hen);
					}
				}
				for (mainloop2 = 1; mainloop2;)
				{
					printf("�\���������w�肵�ĉ�����\n����@�A�����A�A�E��B�A�E���C\n");
					scanf("%d", &muki);
					if (0 < muki&&muki <= 4)
					{
						mainloop2 = 0;
					}
					else
					{
						printf("���͂��ꂽ�͈͖͂����ł��A������x�P�`�S�̐��l�œ��͂��ĉ�����\n");
					}
				}
				/*
				tatesitei = hen - (tatesitei - 1);
				tatesitei = tatesitei + hen;
				yokositei = yokositei + hen;

				for (cnt = 1; cnt <= hen * hen; cnt++)
				{
				if (val[(tatesitei - 1) % hen][(yokositei-1) % hen] > 0)
				{
				tatesitei -= 2;
				yokositei -= 1;
				}
				val[(tatesitei - 1) % hen][(yokositei-1) % hen] = cnt;
				tatesitei += 1;
				yokositei += 1;
				}



				for (tate_loop = hen - 1; tate_loop >= 0; tate_loop--)
				{
				for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
				{
				printf("%3d,", val[tate_loop][yoko_loop]);
				}
				printf("\n");
				}
				*/
				tatesitei--;
				yokositei--;
				switch (muki)
				{
				case 1:
					for (mainloop3 = 1; mainloop3<2;mainloop3++)
					{
						printf("���l�����Ԃ����ꍇ�̓�����������w�肵�ĉ�����\n�P�E�Q��\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei--;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom + 1;
									if (yokositei >= hen)
									{
										yokositei = 0;
									}
								}
							}
							break;
						case 2:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei--;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem + 1;
									yokositei = yokom;
									if (tatesitei >= hen)
									{
										tatesitei = 0;
									}
								}
							}
							break;
						default:
							printf("���͂��ꂽ���l�͖����ł��A������x�P�`�Q�œ��͂��ĉ�����\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 2:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("���l�����Ԃ����ꍇ�̓�����������w�肵�ĉ�����\n�P��Q�E\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{

								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei++;
								if (yokositei< 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem - 1;
									yokositei = yokom;
									if (tatesitei < 0)
									{
										tatesitei = hen - 1;
									}
								}
							}
							break;
						case 2:	
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{

								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei--;
								tatesitei++;
								if (yokositei < 0)
								{
									yokositei = hen - 1;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom+1;
									if (yokositei >= hen)
									{
										yokositei =0;
									}
								}
							}
							break;
						default:
							printf("���͂��ꂽ���l�͖����ł��A������x�P�`�Q�œ��͂��ĉ�����\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 3:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("���l�����Ԃ����ꍇ�̓�����������w�肵�ĉ�����\n�P���Q��\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:

							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei--;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem + 1;
									yokositei = yokom;
									if (tatesitei >= hen)
									{
										tatesitei = 0;
									}
								}
							}
							break;
						case 2:

							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei--;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei < 0)
								{
									tatesitei = hen - 1;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom - 1;
									if (yokositei <0)
									{
										yokositei = hen - 1;
									}
								}
							}
							break;
						default:
							printf("���͂��ꂽ���l�͖����ł��A������x�P�`�Q�œ��͂��ĉ�����\n");
							mainloop3--;
							break;
						}
					}
					break;
				case 4:
					for (mainloop3 = 1; mainloop3<2; mainloop3++)
					{
						printf("���l�����Ԃ����ꍇ�̓�����������w�肵�ĉ�����\n�P���Q��\n");
						scanf("%d", &nige);
						switch (nige)
						{
						case 1:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei++;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem;
									yokositei = yokom - 1;
									if (yokositei < 0)
									{
										yokositei = hen - 1;
									}
								}
							}
							break;
						case 2:
							for (cnt = 1; cnt <= hen * hen; cnt++)
							{
								val[tatesitei][yokositei] = cnt;
								yokom = yokositei;
								tatem = tatesitei;
								yokositei++;
								tatesitei++;
								if (yokositei >= hen)
								{
									yokositei = 0;
								}
								if (tatesitei >= hen)
								{
									tatesitei = 0;
								}
								if (val[tatesitei][yokositei] != 0)
								{
									tatesitei = tatem-1;
									yokositei = yokom;
									if (tatesitei < 0)
									{
										tatesitei =hen-1;
									}
								}
							}
							break;
						default:
							printf("���͂��ꂽ���l�͖����ł��A������x�P�`�Q�œ��͂��ĉ�����\n");
							mainloop3--;
							break;
						}
					}
					break;
				}
				printf("\n");
				for (tate_loop = 0; tate_loop < hen; tate_loop++)
				{
					for (yoko_loop = 0; yoko_loop < hen; yoko_loop++)
					{
						printf("%3d,", val[tate_loop][yoko_loop]);
					}
					printf("\n");
				}
				printf("������x\n");
			}
			else
			{
				printf("���͂��ꂽ���l�͖����ł�\n\n������x");
			}
		}
		else
		{
			mainloop = 0;
		}

	}
	return 0;
}