/*
�w�b�_�[�R�����g
�v���O������	:���K
�쐬��		:2017/04/24
�쐬��		:�׌��@�S
�d�l		:�ϐ���錾���A�ϐ��ɑ���A�\�����s���B
�c���搶��	:
*/
#include<stdio.h>	//stdio.h��ǂݍ���
int main(void)
{
	int tate, yoko, menseki;	//�ϐ��錾
	tate = 35;		//�ϐ�tate�ɒ萔35����
	yoko = 70;		//�ϐ�yoko�ɒ萔70����
	menseki = tate*yoko;	//tate�~yoko��ϐ�menseki�ɑ��

	printf("tate�̒l��%d�ł�\n"tate);
	printf("yoko�̒l��%d�ł�\n"yoko);
	printf("�ʐ�:%d�~%d�́A%d�ł��B\n", tate, yoko, menseki);

	rewind(stdin);
	getchar();
	return 0;
}