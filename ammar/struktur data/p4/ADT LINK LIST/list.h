#ifndef _LIST_H
#define _LIST_H
#include "boolean.h"
#include <stdio.h>
#include <conio.h>
#define Nil NULL
#define Info(P) (P)->info
#define Next(P) (P)->next
#define First(L) (L).First

typedef struct tElmList *addres;
typedef int infoType;

typedef struct tElmList
{
    infoType info;
    addres next;
} ElmList;

typedef struct
{
    addres First;
} List;

void CreateList(List *L);
addres Alokasi(infoType X);
void Dealokasi(addres P);
boolean ListEmpty(List L);
void InsertFirst(List *L, infoType X);
void InsertLast(List *L, infoType X);
void InsertAfter(List *L, infoType X, infoType Y);
void DelFirst(List *L, infoType *X);
void DelLast(List *L, infoType *X);
void DelAfter(List *L, infoType *X, infoType Y);
void PrintInfo(List L);
addres Search(List L, infoType X);
void InversList(List *L);
List getNewInversList(List L);

#endif