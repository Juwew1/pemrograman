/*
	program		: line.h
	author		: 2350081008/Ammar Bagas Fathurrahman Wantoro
	kelas		: A
	deskripsi	: header file dari prototype point
	tanggal		: 3/21/2024

*/
#include <stdio.h>

#ifndef _LINE_H
#define _LINE_H
#include <stdio.h>
#include <stdlib.h>
#include "boolean.h"
#include "point.h"

#define FirsPoint(L) (L).PAwal
#define EndPoint(L) (L).PAkhir

typedef struct {
    POINT PAwal;
    POINT PAkhir;
} LINE;
/*konstruktor*/
void CreateLine(LINE *L);
void CreateLine2(LINE *L, POINT First, POINT End);
/*selektor*/
POINT GetPAwal(LINE L);
POINT GetPAkhir(LINE L);
/*setnilai garis*/
void SetPAwal(LINE *L, POINT NewFirstP);
void setPAkhir(LINE *L, POINT NewEndP);
/*baca dan tulis*/
void BacaLine(LINE *L);
void CetakLine(LINE L);
/*operator relasional*/
boolean IsEQLine(LINE L1, LINE L2);
boolean IsNEQLine(LINE L1, LINE L2);
boolean IsLOnSbX(LINE L);
boolean IsLOnSbY(LINE L);
boolean IsTegakLurus(LINE L, boolean SbX, boolean SbY);
boolean IsSejajar(LINE L1, LINE L2);
/*operasi aritmatika*/
LINE GeserLine(LINE L, int deltaX, int deltaY);
double Gradien(LINE L);

#endif