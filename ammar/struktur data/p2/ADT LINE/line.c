/*
	program		: line.c
	author		: 2350081008/Ammar Bagas Fathurrahman Wantoro
	kelas		: A
	deskripsi	: header file dari prototype point
	tanggal		: 3/21/2024

*/
#include <stdio.h>
#include <stdio.h>
#include <stdlib.h>
#include "line.h"

/*konstruktor*/
void CreateLine(LINE *L) {
    CreatePoint(&(*L).PAwal);
    CreatePoint(&(*L).PAkhir);
}
void CreateLine2(LINE *L, POINT First, POINT End) {
    (*L).PAwal = First;
    (*L).PAkhir = End;
}

/*selektor*/
POINT GetPAwal(LINE L) {
    /*mengembalikan titik garis awal*/
    return L.PAwal;
}
/*selektor*/
POINT GetPAkhir(LINE L) {
    /*mengembalikan titik garis akhir*/
    return L.PAkhir;
}
/*melakukan set nilai pada point garis*/
void SetPAwal(LINE *L, POINT NewFirstP) {
    /*melakukan setelan pada point awal garis*/
    (*L).PAwal = NewFirstP;
}
/*melakukan set nilai pada point garis*/
void setPAkhir(LINE *L, POINT NewEndP) {
    /*melakukan setelan pada pint titik garis*/
    (*L).PAkhir = NewEndP;
}
/*kelompok input dan output baca dan tulis*/
void BacaLine(LINE *L) {
    /*melakukan baca pada nilai point awal dan point akhir */
    printf("Point Awal: ");
    BacaPoint(&(*L).PAwal);
    printf("\nPoint Akhir: ");
    BacaPoint(&(*L).PAkhir);
}
void CetakLine(LINE L) {
    /*melakukan pencetakan pada garis*/
    printf("Garis dari titik awal (%d,%d) ke titik akhir (%d,%d)\n", L.PAwal.X, L.PAwal.Y, L.PAkhir.X, L.PAkhir.Y);
}

boolean IsEQLine(LINE L1, LINE L2) {
    /*mengembalikan nilai apakan titik garis 1 dan garis 2 sama atau ekivalen*/
    return EQ(L1.PAwal, L2.PAwal) && EQ(L1.PAkhir, L2.PAkhir);
}

boolean IsNEQLine(LINE L1, LINE L2) {
    /*mengembalikan nilai apakah titk garis 1 dan garis 2 tidak sama atau tidak ekivalen*/
    return NEQ(L1.PAwal, L2.PAwal) && NEQ(L1.PAkhir, L2.PAkhir);
}

boolean IsLOnSbX(LINE L) {
    /*melakukan pemeriksaan apakah garis berada di sumbu x*/
    return IsOnSbX(L.PAwal) && IsOnSbX(L.PAkhir);
}

boolean IsLOnSbY(LINE L) {
    /*melakukan pemeruksaan dan pengembalian nilai apakah titik garis berada di sumbu y*/
    return IsOnSbY(L.PAwal) && IsOnSbY(L.PAkhir);
}

boolean IsTegakLurus(LINE L, boolean SbX, boolean SbY) {
    /*melakukan pengembalian nilai apakah garis daling tegak lurus*/
    boolean TL;
    
    if(SbY) {
        
        if ((L.PAkhir.X - L.PAwal.X) == 0){
            TL = true;
            /*jika kondisi benar maka TL true*/
        }
    }

    if(SbX) {
        if (Gradien(L) == 0){
            /*jika kondisi benar maka kondisi true*/
            TL = true;
        }
    }

    return TL;
}

boolean IsSejajar(LINE L1, LINE L2) {
    /*jika garis sejajar maka pengembalian nilai akan true*/
    boolean hasil;
    hasil = false;
    if(Gradien(L1) == Gradien(L2)){
        hasil = true;
    }
    return hasil;
}

LINE GeserLine(LINE L, int deltaX, int deltaY) {
    LINE newLine;
    /*menggeser garis dari masukan pengguna*/
    newLine.PAwal.X = L.PAwal.X + deltaX;
    newLine.PAwal.Y = L.PAwal.Y + deltaY;
    newLine.PAkhir.X = L.PAkhir.X + deltaX;
    newLine.PAkhir.Y = L.PAkhir.Y + deltaY;

    return newLine;
}

double Gradien(LINE L) {
    double hasil;
    /*rumus gradien*/
    hasil = (L.PAkhir.Y - L.PAwal.Y)/(L.PAwal.X - L.PAwal.X);
    return hasil;
}