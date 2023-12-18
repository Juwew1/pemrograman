/**
 * Program: Main.c
 * Author:  - Muhamad Yasir Noval/2350081004
 *          - Muhamad Yusron Noval/235081003
 *          - Muhammad Abhinaya Rakan Albarra/2350081011
 * Date: 3 Desember 2023
 * Description: Diketahui sekumpulan data berupa nilai ujian berupa
 * UTS, tugas dan UAS, dengan rentang 10-100, setiap data nilai di-
 * berikan kelas datanya, yaitu Baik = A, Cukup = B, atau Buruk = C.
 *
 */

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define baris 10
#define kolom 5

typedef struct {
    int nilai[baris + 1][kolom + 1];
    int neffBaris;
    int neffKolom;
} TabNilai;

// prototype
void createTab(TabNilai *T);

void cetakTab(TabNilai T);

void createData(TabNilai *T);

void jarakKedekatan(TabNilai *T, int uts, int tugas, int uas);

void UrutBubble(TabNilai *T);

int jarakTerkecil(TabNilai T, int K);

int main() {
    // kamus lokal
    int uts, tugas, uas, K;
    TabNilai myTab;


    // algoritma
    createTab(&myTab);
    createData(&myTab);

    printf("\tPROGRAM PREDIKSI KELAS DATA\n");

    printf("Tabel Data Nilai\n");
    cetakTab(myTab);

    printf("\nMasukan Nilai UTS: ");
    scanf("%d", &uts);

    printf("Masukan Nilai Tugas: ");
    scanf("%d", &tugas);

    printf("Masukan Nilai UAS: ");
    scanf("%d", &uas);

    printf("\n\nTabel Data Nilai\n");
    jarakKedekatan(&myTab, uts, tugas, uas);
    cetakTab(myTab);

    UrutBubble(&myTab);

    printf("\n\nMasukan K: ");
    scanf("%d", &K);
//    jarakTerkecil(myTab, K);

    printf("\nBanyak nilai terdekat (terkecil) = %d\n", jarakTerkecil(myTab, K));

    return 0;
}

// body of prototype
void createTab(TabNilai *T) {
    // kamus lokal

    // algoritma
    (*T).neffBaris = 0;
    (*T).neffKolom = 0;
}

void createData(TabNilai *T) {
    // kamus lokal
    int i, j;

    // algoritma
    srand(time(NULL));

    for (i = 0; i < baris; i++) {
        if ((*T).neffBaris < baris) {
            (*T).neffBaris++;
        }
        for (j = 0; j < kolom; j++) {
            if ((*T).neffKolom < kolom) {
                (*T).neffKolom++;
            }
            if (j == 4) {
                (*T).nilai[i][j] = 0;
            } else if (j == 0) {
                (*T).nilai[i][j] = i + 1;
            } else if (j == 3) {
                (*T).nilai[i][j] = rand() % (90 - 70 + 1) + 70;
            } else {
                (*T).nilai[i][j] = 10 + rand() % (95 - 10 + 1);
            }
        }
    }
}

void cetakTab(TabNilai T) {
    // kamus lokal
    int i, j, sum;

    // algoritma
    printf("No\t| UTS\t| UAS\t| Tugas\t| K\t| Kelas Data\t|\n");
    for (i = 0; i < T.neffBaris; i++) {
        for (j = 0; j < T.neffKolom; j++) {
            printf(" %d\t|", T.nilai[i][j]);
        }
        sum = (T.nilai[i][1] + T.nilai[i][2] + T.nilai[i][3]) / 3;
        if (sum > 70) {
            printf(" Baik\t\t|");
        } else if (sum > 60) {
            printf(" Cukup\t\t|");
        } else {
            printf(" Buruk\t\t|");
        }

        printf("\n");
    }
}

void jarakKedekatan(TabNilai *T, int uts, int tugas, int uas) {
    // kamus lokal
    int jarak, i;

    // algoritma
    for (i = 0; i < (*T).neffBaris; i++) {
        jarak = (uts - (*T).nilai[i][1]) + (uas - (*T).nilai[i][2]) + (tugas - (*T).nilai[i][3]);
        (*T).nilai[i][4] = jarak;
    }
}

void UrutBubble(TabNilai *T) {
    // Kamus lokal
    int i, j, tmp, N;

    // Algoritma
    N = (*T).neffBaris;

    for(i=N; i>1; i--) {
        for(j=1; j<i; j++) {
            if((*T).nilai[j-1][4] > (*T).nilai[j][4]) {
                tmp = (*T).nilai[j-1][4];
                (*T).nilai[j-1][4] = (*T).nilai[j][4];
                (*T).nilai[j][4] = tmp;
            }
        }
    }

    for(i=0; i < (*T).neffBaris; i++) {
        printf("%d ", (*T).nilai[i][4]);
    }
}

int jarakTerkecil(TabNilai T, int K) {
    // kamus lokal
    int i, sum;

    // algoritma
    sum = 0;
    for (i = 0; i < K; i++) {
        sum = sum + 1;
        printf("%d ", T.nilai[i][4]);
    }

    return sum;
}