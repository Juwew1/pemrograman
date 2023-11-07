//
// Created by myasi on 11/5/2023.
//

#include <stdio.h>
#include <math.h>

// prosedur
int isPrima(int n);

int main() {
    // KAMUS
    int li;

    // ALGORITMA
    printf("Bilangan prima dari 1 sampai 100: \n");

    for (li = 1; li <= 100; li++) {
        if (isPrima(li)) {
            printf("%3d ", li);
        }
    }

    return 0;
}

int isPrima(int n) {
    // KAMUS lokal
    int li;

    // ALGORITMA lokal
    if (n == 2) {
        return 1; //true
    }

    if (n % 2 == 0 || n == 1) {
        return 0; //false
    }

    return 1; //true
}