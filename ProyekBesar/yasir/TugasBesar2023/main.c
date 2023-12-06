/**
 * Program: Mmain.c
 * Author:  - Muhamad Yasir Noval/2350081004
 *          - Muhamad Yusron Noval/235081003
 *          - Abhin naya
 * Date: 3 Desember 2023
 * Description: Diketahui sekumpulan data berupa nilai ujian berupa
 * UTS, tugas dan UAS, dengan rentang 10-100, setiap data nilai di-
 * berikan kelas datanya, yaitu Baik = A, Cukup = B, atau Buruk = C.
 *
 */

#include <stdio.h>
#include <stdlib.h>

int main() {
    // kamus lokal
    int i, j;

    // algoritma
    int nilai[10][5] = {
            {1,  70, 40, 60, 0},
            {2,  60, 30, 50, 0},
            {3,  50, 20, 40, 0},
            {4,  40, 10, 30, 0},
            {5,  30, 90, 20, 0},
            {6,  20, 80, 10, 0},
            {7,  10, 70, 90, 0},
            {8,  90, 60, 80, 0},
            {9,  80, 50, 70, 0},
            {10, 75, 75, 75, 0},
    };

    printf("Tabel Data Nilai\n");
    printf("No\t| UTS\t| UAS\t| Tugas\t| K\t|\n");
    for (i = 0; i < 10; i++) {
        for (j = 0; j < 5; j++) {
            printf(" %d\t|", nilai[i][j]);
        }

        printf("\n");
    }

    printf("\nStatus nilai: \n");
    printf("80 = A\t70 = B\t60 = C\n");

    printf("%d", nilai[0][1]);

    return 0;
}