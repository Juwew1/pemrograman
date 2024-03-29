/**
 * Program: list.h
 * Author: (2350081004, Muhamad Yasir Noval)
 * Kelas: A
 * Deskripsi: Header file dari prototype queue
 * Tanggal: -
 */

#include <stdio.h>

#include "../lib/list.h"

// Prototype linear list
// konstruktor
void CreateList(List *L) {
    First(*L) = Nil;
}

// Destruktor/Dealokator
address Alokasi(infoType X) {
    ElmList P;

    P.info = X;
    P.next = Nil;

    return P.next;
}

void DeAlokasi(address P) {

}

// {Kelompok operasi cek elemen kosong atau penuh}
boolean ListEmpty(List L) {
    if (L.First == Nil) {
        return true;
    } else {
        return false;
    }
}

// {Kelompok interaksi dengan I/O device, Baca/Tulis}
// Penambahan elemen
void InsFirst(List *L, infoType X) {

}

void InsLast(List *L, infoType X) {

}

void InsAfter(List *L, infoType X, infoType Y) {

}

// Penghapusan elemen
void DelFirst(List *L, infoType *X) {

}

void DelLast(List *L, infoType *X) {

}

void DelAfter(List *L, infoType *X, infoType Y) {

}

// cetak list
void PrintInfo(List L) {

}

// Kelompok operasi lain terhadap type
int NbElm(List L) {

}

address Search(List L, infoType X) {

}

void InversList(List *L) {

}

List getNewInversList(List L) {

}