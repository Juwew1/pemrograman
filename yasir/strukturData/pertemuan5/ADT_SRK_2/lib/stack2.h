/**
 * Program: stack2.h
 * Author: (2350081004, Muhamad Yasir Noval)
 * Kelas: A
 * Deskripsi: Header file dari boolean
 * Tanggal: 15 Maret 2024
 */

#ifndef ADT_SRK_2_STACK2_H
#define ADT_SRK_2_STACK2_H

#include <stdio.h>
#include <conio.h>

#include "boolean.h"

// definisi pointer
#define nill NULL
#define info(P)
#define next(P)
#define TOP(S) (S).TOP

// pendefinisian tipe stack
typedef int infoType;
typedef struct tElmStack *address;

typedef struct {
    infoType Info;
    address next;
} ElmStack;

typedef struct {
    address BOTTOM;
    address TOP;
} Stack;

// konstruktor
void CreateStack(Stack *S);

address Alokasi(infoType x);

// Destruktor
void DeAlokasi(address P);

// Operasi stack
void Push(Stack *S, infoType X);

void Pop(Stack *S, infoType *X);

void CetakStack(Stack S);

boolean IsStackEmpty(Stack S);

boolean CariElemenStack(Stack S, infoType x);

#endif //ADT_SRK_2_STACK2_H
