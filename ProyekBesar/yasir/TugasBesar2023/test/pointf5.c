///*
//NAMA	: AJI KARTIKO HARTANTO
//NIM		: 2350081062
//29-DES-2023
//*/
//
//#include <stdio.h>
//#include <stdlib.h>
//
///* file : pointf5 */
///* pointer to function */
///* prosedur dengan parameter input/output sebagai parameter */
///* melakukan offset terhadap tabel tergantung fungsi f */
//
///* KAMUS GLOBAL */
//int N; /* ukuran efektif */
//enum MyType {
//    bulat, karakter
//};
///* prototype */
///* fungsi yang diberikan sebagai parameter aktual */
//void succI(int *i); /* suksesor */
//void predI(int *i); /* predesesor */
//
//void succC(char *i); /* suksesor */
//void predC(char *i); /* predesesor */
//
//void printtab(void *T); /* print tabel yang belum ketahuan type nya */
//
///* prosedur dengan parameter sebuah fungsi yang argumennya belum jelas */
//void geser(int *TT, void (*f)(void *));
//
///* PROGRAM UTAMA */
//int main() {
//    /* KAMUS LOKAL */
//    void *MyTabInt;
//    void *MyTabC;
//    int i;
//
//    /* ALGORITMA */
//    N = 10;
//    MyTabInt = (int *) malloc(N * sizeof(int));
//    MyTabC = (char *) malloc(N * sizeof(char));
//    *MyTabInt = 1;
//    for (i = 0; i < N; i++) {
//        *(MyTabInt + i) = i;
//        *(MyTabC + i) = 'z';
//    }
//    printf("isi tabel dalam main sebelum pemanggil \n");
//    printf("table integer \n");
//    printtab((int *) MyTabInt);
//
//    printf("table character \n");
//    printtab((char *) MyTabC);
//    printf("\n");
//
//    geser((int *) MyTabInt, (int *) succI);
//    geser((char *) MyTabC, (char *) succC);
//
//    printf("dalam main \n");
//    printf("table integer \n");
//    printtab((int *) MyTabInt);
//    printf("table character \n");
//    printtab((char *) MyTabC);
//    printf("\n");
//
//    return 0;
//}
//
///* BODY FUNGSI */
//void succI(int *i) {
//    *i = *i + 1;
//}
//
//void predI(int *i) {
//    *i = *i - 1;
//}
//
//void succC(char *c) {
//    *c = *c + 1;
//}
//
//void predC(char *c) {
//    *c = *c - 1;
//}
//
//void geser(int *TT, void (*f)(void *)) {
//    /* KAMUS */
//    int i;
//
//    /* ALGORITMA */
//    printf("dalam geser \n");
//    for (i = 0; i < N; i++) {
//        f(&TT[i]);
//        printf("%d", TT[i]);
//    }
//    printf("\n");
//}
//
//void printtab(void *T, enum MyType Ty) {
//    /* KAMUS */
//    int i;
//
//    for (i = 0; i < N; i++) {
//        switch (Ty) {
//            case bulat:
//                printf("%d", (int *) *(T + i));
//                break;
//            case karakter:
//                printf("%c", (char *) *(T + i));
//                break;
//        }
//    }
//}
