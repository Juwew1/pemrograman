/**
 * Program: BubbleSortTugas.c
 * Author: 2350081004/Muhamad Yasir Noval
 * Date: ..........................
 * Description: ...................
 */

#include <stdio.h>
#include <conio.h>

#define nMak 10

typedef struct {
    int Ta[nMak + 1];
    int neff;
} Tab;

// prototype
void CreateTab(Tab *T);

void Add(Tab *T, int x);

void Cetak(Tab T);

void InsertSort(Tab *T);

int main() {
    // kamus
    Tab M;
    int N;

    // algoritma
    CreateTab(&M);
    printf("Masukan Bilangan : ");
    scanf("%d", &N);

    while (N != 9999) {
        Add(&M, N);
        printf("Masukan Bilangan : ");
        scanf("$d", &N);
    }

    Cetak(M);
    InsertSort(&M);
    Cetak(M);

    return 0;
}

void CreateTab(Tab *T) {
    (*T).neff = -1;
}

void Add(Tab *T, int x) {
    if ((*T).neff < nMak) {
        (*T).neff++;
        (*T).Ta[(*T).neff] = x;
    }
}

void Cetak(Tab T) {
    int i;

    for (i = 0; i <= T.neff; i++) {
        printf("%d", T.Ta[i]);
    }
    printf("\n");
}

void InsertSort(Tab *T) {
    int i, j;
    int index;

    for (i = 1; i <= (*T).neff; i++) {
        index = (*T).Ta[i];
        j = i - 1;

        while (j >= 0 && (*T).Ta[j] > index) {
            (*T).Ta[j + 1] = (*T).Ta[j];
            j--;
        }
        (*T).Ta[j + 1] = index;
    }
}