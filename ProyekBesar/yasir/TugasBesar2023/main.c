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

void PengurutanData(TabNilai *T);

void jarakTerkecil(TabNilai T, int K);

int main() {
    // kamus lokal
    int uts, tugas, uas, K;
    TabNilai myTab;


    // algoritma
    createTab(&myTab);
    createData(&myTab);

    printf("\n\tPROGRAM PREDIKSI KELAS DATA\n");

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

    PengurutanData(&myTab);

    printf("\n\nMasukan K: ");
    scanf("%d", &K);

    printf("\nMahasiswa tersebut mendapatkan nilai: ");
    jarakTerkecil(myTab, K);

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

void PengurutanData(TabNilai *T) {
    // Kamus lokal
    int i, j, tmp, N;

    // Algoritma
    N = (*T).neffBaris;

    for (i = N; i > 1; i--) {
        for (j = 1; j < i; j++) {
            // Compare the classes (baik, cukup, buruk) instead of distances
            int classA = (*T).nilai[j - 1][4];
            int classB = (*T).nilai[j][4];

            if (classA > classB) {
                // Swap the entire rows
                for (int k = 0; k < kolom + 1; k++) {
                    tmp = (*T).nilai[j - 1][k];
                    (*T).nilai[j - 1][k] = (*T).nilai[j][k];
                    (*T).nilai[j][k] = tmp;
                }
            }
        }
    }
}

void jarakTerkecil(TabNilai T, int K) {
    // kamus lokal
    int i, rataRata;
    int baik, cukup, buruk;

    // algoritma
    baik = 0;
    cukup = 0;
    buruk = 0;

    for (i = 0; i < K; i++) {
        rataRata = (T.nilai[i][1] + T.nilai[i][2] + T.nilai[i][3]) / 3;
        if (rataRata > 70) {
            baik = baik + 1;
        } else if (rataRata > 60) {
            cukup = cukup + 1;
        } else {
            buruk = buruk + 1;
        }
    }

    if (baik > cukup && baik > buruk) {
        printf("Baik");
    } else if (cukup > baik && cukup > buruk) {
        printf("Cukup");
    } else if (buruk > baik && buruk > cukup) {
        printf("Buruk");
    } else {
        printf("Data tidak valid");
    }
}