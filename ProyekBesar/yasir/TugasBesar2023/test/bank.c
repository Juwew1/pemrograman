//
// Created by aibnu on 04/12/2023.
//
#include <stdio.h>
#include <conio.h>
//#include "boolean.h"

#define nMax 10

typedef struct {
    long int pin;
    long int saldo;
}Nasabah;

typedef struct {
    Nasabah Tb[nMax + 1];
    int neff;
}TabInt;

void CreateTab (TabInt *T);

int main (){
    //kamus
    Nasabah A;
    long int PinUser;
    TabInt bank;
    //algoritma

    A.saldo = 10000;
    A.pin =1234567;


    CreateTab (&bank);
//    bank.Tb[bank.neff] = {A.saldo, A.pin};
    printf("masukan pin 7 digit"); scanf("%d");



}

void CreateTab (TabInt *T){
    (*T).neff = 0;
}