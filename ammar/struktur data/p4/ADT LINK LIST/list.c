#include <stdio.h>
#include <conio.h>
#include "list.h"

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