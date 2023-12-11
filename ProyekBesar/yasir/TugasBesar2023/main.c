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

int main() {
    // kamus lokal
    int uts, tugas, uas;
    TabNilai myTab;


    // algoritma
    createTab(&myTab);
    createData(&myTab);

    printf("\tPROGRAM PREDIKSI KELAS DATA\n");

    printf("Tabel Data Nilai\n");
    cetakTab(myTab);

    printf("\nStatus nilai: \n");
    printf("80 = A\t70 = B\t60 = C\n");

    printf("\nMasukan Nilai UTS: ");
    scanf("%d", &uts);

    printf("\nMasukan Nilai Tugas: ");
    scanf("%d", &tugas);

    printf("\nMasukan Nilai UAS: ");
    scanf("%d", &uas);

    printf("\n\nTabel Data Nilai\n");
    jarakKedekatan(&myTab, uts, tugas, uas);
    cetakTab(myTab);

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
        for (j = 0; j < kolom; j++) {
            if (j == 4) {
                (*T).nilai[i][j] = 0;
            } else if (j == 0){
                (*T).nilai[i][j] = i + 1;
            } else {
                (*T).nilai[i][j] = 10 + rand() % (95 - 10 + 1);
            }
        }
    }
}

void cetakTab(TabNilai T) {
    // kamus lokal
    int i, j;

    // algoritma
    T.neffBaris = baris;
    T.neffKolom = kolom;

    printf("No\t| UTS\t| UAS\t| Tugas\t| K\t|Status\t|\n");
    for (i = 0; i < T.neffBaris; i++) {
        for (j = 0; j < T.neffKolom; j++) {
            printf(" %d\t|", T.nilai[i][j]);
        }

        printf("\n");
    }
}

void jarakKedekatan(TabNilai *T, int uts, int tugas, int uas) {
    // kamus lokal
    int jarak, i;

    // algoritma
    for (i = 0; i < baris; i++) {
        jarak = (uts - (*T).nilai[i][1]) + (uas - (*T).nilai[i][2]) + (tugas - (*T).nilai[i][3]);
        (*T).nilai[i][4] = jarak;
    }
}