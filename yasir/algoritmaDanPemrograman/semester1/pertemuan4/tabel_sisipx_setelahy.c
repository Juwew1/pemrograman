/**
 * Program: tabel_sisipx_setelahy.c
 * Author: 2350081004/Muhamad Yasir Noval
 * Date: ...............
 * Description: .............
 */

#include <stdio.h>
#include <conio.h>
#include "boolean.h"

#define nMax 10

typedef struct {
    int T[nMax + 1];
    int neff;
} TabInt;

int main() {
    // KAMUS
    TabInt MyTab;
    int N, i, y, x, last, j;
    boolean ketemu;

    // ALGORITMA
    // membuat tabel
    MyTab.neff = 0;

    printf("Membuat tabel\n");
    printf("Masukan bilangan: ");
    scanf("%d", &N);

    while (N != 999) {
        if (MyTab.neff < nMax) {
            MyTab.neff++;
            MyTab.T[MyTab.neff] = N;
        }

        printf("Masukan bilangan: ");
        scanf("%d", &N);
    }

    // cetak tabel
    printf("\nTabel pertama\n");
    for (i = 1; i <= MyTab.neff; i++) {
        printf("<%d>", MyTab.T[i]);
    }
    printf("\n\n");

    // menyisipkan nilai x di antara y
    printf("Masukan nilai X: ");
    scanf("%d", &x);

    printf("Masukan nilai Y: ");
    scanf("%d", &y);

    ketemu = false;
    i = 1;

    while (i <= MyTab.neff && !ketemu) {
        if (MyTab.T[i] == y) {
            ketemu = true;
        } else {
            i++;
        }
    }

    if (ketemu) {
        if (MyTab.neff < nMax) {
            last = MyTab.neff;

            if (i == last) {
                MyTab.neff++;
                MyTab.T[MyTab.neff] = x;
            } else {
                for (j = 1; j <= last - i; j++) {
                    MyTab.T[last + 1] = MyTab.T[last];
                    last--;
                }

                MyTab.T[i] = x;
                MyTab.neff++;
            }
        }
    }

    // cetak tabel
    printf("\nTabel kedua\n");
    for (i = 1; i <= MyTab.neff; i++) {
        printf("<%d>", MyTab.T[i]);
    }

    return 0;
}