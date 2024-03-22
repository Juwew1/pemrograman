/**
 * Program: queue.c
 * Author: (2350081004, Muhamad Yasir Noval)
 * Kelas: A
 * Deskripsi: Header file dari prototype queue
 * Tanggal: -
 */

#include "../lib/queue.h"

#include <stdio.h>
#include <conio.h>

// Prototype Queue
// Konstruktor membentuk Queue
void CreateQueue(Queue *Q) {
    (*Q).HEAD = Nil;
    (*Q).TAIL = Nil;
}

// {Operasi terhadap komponen: selektor Get dan Set} : tidak perlu sudah di define diatas
int NBElmt(Queue Q) {
    if (Q.HEAD == 0 && Q.TAIL) {
        return 0;
    } else {
        return Q.TAIL;
    }
}

// Destruktor/Dealokator: tidak perlu

// {Kelompok operasi pada Queue}
boolean IsQueueEmpty(Queue Q) {
    if (Q.HEAD == Nil && Q.TAIL == Nil) {
        return true;
    } else {
        return false;
    }
}

boolean IsQueueFull(Queue Q) {
    if (Q.TAIL == MaxEl) {
        return true;
    } else {
        return false;
    }
}

// Menambahkan sebuah element ke queue
void AddQueue(Queue *Q, infotype X) {
    if (IsQueueFull((*Q))) {
        printf("Penampung elemen Q penuh");
    } else {
        (*Q).HEAD = 1;
        (*Q).TAIL++;
        (*Q).T[(*Q).TAIL] = X;
    }
}

// Menghapus sebuah element queue
void DelQueue(Queue *Q, infotype X) {
    int tmp, i, j;

    tmp = 0;

    if (IsQueueEmpty((*Q))) {
        printf("Penampung elemen Q Kosong");
    } else {
        for (i = 1; i <= (*Q).TAIL; i++) {
            if ((*Q).T[i] == X) {
                if ((*Q).T[i] == (*Q).HEAD) {
                    tmp = (*Q).T[i];
                    break;
                } else {
                    printf("Tidak bisa melakukan penghapusan karena \ntidak sesuai dengan standar aturan FIFO\n");
                    break;
                }
            }
        }

        if (tmp != Nil) {
            for (j = 1; j <= (*Q).TAIL; j++) {
                (*Q).T[j] = (*Q).T[j + 1];
            }

            (*Q).TAIL--;
        } else {
            printf("Penghapusan data gagal");
        }
    }
}

// {Kelompok interaksi dengan i/o device, Baca/Tulis}
void PrintQueueInfo(Queue S) {
    int i;

    if (IsQueueEmpty(S)) {
        printf("Tabel Queue kosong");
    } else {
        for (i = 1; i <= S.TAIL; i++) {
            printf("[%d] ", S.T[i]);
        }
    }
}

// Kelompok operasi lain terhadap type
boolean isInfoKetemu(Queue S, infotype X) {
    int i;

    if (IsQueueEmpty(S)) {
        return false;
    } else {
        for (i = 1; i <= S.TAIL; i++) {
            if (S.T[i] == X) {
                return true;
            }
        }

        return false;
    }
}

address CariElemenQueue(Queue Q, int X) {
    int i;

    if (IsQueueEmpty(Q)) {
        // jika tabel kosong return Index undefine
        return IdxUndef;
    } else {
        // jika ditemukan return addres yaitu i
        for (i = 1; i <= Q.TAIL; i++) {
            if (Q.T[i] == X) {
                return i;
            }
        }

        // jika data x tidak ditemukan return Index undefine
        return IdxUndef;
    }
}

// elemen queue
int elemen(int x) {
    return x;
}
