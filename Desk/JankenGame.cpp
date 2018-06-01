//**********************************************************************
// 	CL14 課題10  Program分割
//      (分割前 Program)
//																  Sumida
//**********************************************************************
#define  _CRT_NO_SECURE_WARNINGS
#define  _CRT_SECURE_NO_DEPRECATE
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define goo    1			//  Macro(代入値)定義
#define cyoki  2
#define per    3

int  player   = 0;		    //  コンピュータの手
int  computer = 0;			//  プレイヤーの手
char results[3][10] = {"グー","チョキ","パー"};

void init(void);		    //  乱数の初期化
void setPalyer(int);		//  プレイヤーの手設定
void setComputer(void);     //  コンピュータの手設定
void judge(void);		   	// 	判定

//***********************************************************
void main(void){
    int te;

    init();					// 乱数初期化
    printf("*** じゃんけんゲーム ***\n");
    while(1){				
        printf("\nあなたの手は？(グー:1, チョキ:2, パー:3, 終了：9) >   ");
        rewind(stdin);
        scanf("%d",&te);
		if (te == 9){
			printf("終了します\n");
			break;
		}else if (te < goo || te > per) {
            printf("入力誤りです、再試行\n");
            continue;
        }else {
            setPalyer(te); 	//  自分の手設定
            setComputer(); 	//  コンピュータの手設定
            judge();        //  判定
        }
    }
	system("pause");
}

//***********************************************************
void init(void)  {		            //  乱数の初期化
    srand((unsigned) time(NULL));
}

//***********************************************************
void setPalyer(int te) {			//  プレイヤーの手設定
    player = te;
}

//***********************************************************
void setComputer(void) {			//  コンピュータの手設定
    computer = rand()%3 + 1;
}

//***********************************************************
void judge(void) {					// 判定
    printf("\nプレイヤー：%s\n",results[player-1]);
    printf("コンピューター：%s\n",results[computer-1]);
    if  ((player == goo   && computer == cyoki) ||
         (player == cyoki && computer == per)   ||
         (player == per   && computer == goo)) {
        printf("プレイヤーの勝ち!!\n");
    }else if ((player == goo   && computer == per)  ||
              (player == cyoki && computer == goo)  ||
			  (player == per   && computer == cyoki)) {
        printf("コンピュータの勝ち!!\n");
    }else {
        printf("あいこです。\n");
    }
}

