/*
 * Program: main.c
 * Author: Muhamad Yasir Noval/2350081004
 * Date: 2 Januari 2024
 * Description: Aplikasi kasir serderhana
 */

#include <stdio.h>
#include <string.h>

int main() {
    // kamus
    char kodeBarang[11][5] = {
            "N001", "N002", "M001", "M002", "G001", "G002", "G003", "D001", "D002", "D003", "D004"
    };

    char namaBarang[11][50] = {
            "Nasi putih", "Nasi Merah", "Minyak Goreng", "Minyak Kelapa", "Gula pasir", "Gula Merah", "Gula Tebu",
            "Daging Ayam", "Dagin Sapi", "Daging Kambing", "Daging Babi"
    };

    int stok[] = {
            10, 20, 30, 30, 50, 60, 34, 234, 555, 45, 10,
    };

    int harga[] = {
            12000, 15000, 7500, 9000, 2500, 3400, 5400, 40000, 60000, 55000, 60000
    };

    int i, j, k;

    // algoritma
    printf("\tAPLIKASI KASIR SEDERHANA");
    printf("\n");
    printf("\nTabel Produk\n");
    printf("No\t| Kode Barang\t| Nama Barang\t| Stok Barang\t| Harga Barang\t|\n");

    for (i = 0; i < 11; i++) {
        printf(" %d\t|", i + 1);
        printf(" %s\t\t|", kodeBarang[i]);
        printf("%s\t|", namaBarang[i]);
        printf(" %d\t\t|", stok[i]);
        printf(" Rp.%d\t|", harga[i]);
        printf("\n");
    }

    return 0;
}