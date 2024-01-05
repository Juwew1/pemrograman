#include <stdio.h>
#include <string.h>
#include <windows.system.h>

#define MAX_BARANG 100

typedef struct {
    char kode[10];
    char nama[50];
    int stok;
    double harga;
} Barang;

void tambahStok(Barang *barang, int jumlah);

void kurangiStok(Barang *barang, int jumlah);

Barang *cariBarangByKode(Barang *daftarBarang, int jumlahBarang, const char *kode);

Barang *cariBarangByNama(Barang *daftarBarang, int jumlahBarang, const char *nama);

double hitungTotalHarga(Barang *barang, int jumlahBeli);

double hitungKembalian(double totalHarga, double uangDibayar);

void tampilkanDaftarBarang(Barang *daftarBarang, int jumlahBarang);

int main() {
    Barang daftarBarang[MAX_BARANG] = {
            {"A001", "Beras",  50, 10000.0},
            {"A002", "Gula",   30, 12000.0},
            {"A003", "Minyak", 25, 13000.0},
            {"A004", "Sarden", 45, 15000.0},
            {"A005", "Telur",  34, 3000.0},
            {"A006", "Snack",  20, 4000.0},
            {"A007", "Kopi",   25, 2000.0},
            {"A008", "Teh",    33, 1500.0},
            {"A009", "Mie",    78, 13000.0},
    };

    int jumlahBarang = 9; // Jumlah data barang yang ada

    int selesai = 0;
    while (!selesai) {
        // Menampilkan daftar barang
        tampilkanDaftarBarang(daftarBarang, jumlahBarang);

        // Contoh penggunaan aplikasi kasir
        char kodeA[10], kodeB[10];
        printf("Masukkan kode barang A: ");
        scanf("%s", kodeA);
        printf("Masukkan kode barang B: ");
        scanf("%s", kodeB);

        Barang *barangA = cariBarangByKode(daftarBarang, jumlahBarang, kodeA);
        Barang *barangB = cariBarangByKode(daftarBarang, jumlahBarang, kodeB);

        if (barangA != NULL && barangB != NULL) {
            // Memasukkan jumlah pembelian
            int jumlahBeliA, jumlahBeliB;
            printf("Masukkan jumlah pembelian %s: ", barangA->nama);
            scanf("%d", &jumlahBeliA);
            printf("Masukkan jumlah pembelian %s: ", barangB->nama);
            scanf("%d", &jumlahBeliB);

            // Menghitung total harga
            double totalHargaA = hitungTotalHarga(barangA, jumlahBeliA);
            double totalHargaB = hitungTotalHarga(barangB, jumlahBeliB);
            double totalHarga = totalHargaA + totalHargaB;

            printf("Total harga: %.2f\n", totalHarga);

            // Memasukkan uang yang dibayar
            double uangDibayar;
            printf("Masukkan uang yang dibayar: ");
            scanf("%lf", &uangDibayar);

            // Menghitung kembalian
            double kembalian = hitungKembalian(totalHarga, uangDibayar);
            printf("Kembalian: %.2f\n", kembalian);

            // Mengurangi stok barang
            kurangiStok(barangA, jumlahBeliA);
            kurangiStok(barangB, jumlahBeliB);

            printf("Apakah ada transaksi lain? (1: Ya, 0: Tidak) ");
            scanf("%d", &selesai);
            system("cls");
        } else {
            printf("Barang tidak ditemukan.\n");
        }
    }

    return 0;
}

void tambahStok(Barang *barang, int jumlah) {
    barang->stok += jumlah;
}

void kurangiStok(Barang *barang, int jumlah) {
    barang->stok -= jumlah;
}

Barang *cariBarangByKode(Barang *daftarBarang, int jumlahBarang, const char *kode) {
    for (int i = 0; i < jumlahBarang; i++) {
        if (strcmp(daftarBarang[i].kode, kode) == 0) {
            return &daftarBarang[i];
        }
    }
    return NULL;
}

Barang *cariBarangByNama(Barang *daftarBarang, int jumlahBarang, const char *nama) {
    for (int i = 0; i < jumlahBarang; i++) {
        if (strcmp(daftarBarang[i].nama, nama) == 0) {
            return &daftarBarang[i];
        }
    }
    return NULL;
}

double hitungTotalHarga(Barang *barang, int jumlahBeli) {
    return barang->harga * jumlahBeli;
}

double hitungKembalian(double totalHarga, double uangDibayar) {
    return uangDibayar - totalHarga;
}

void tampilkanDaftarBarang(Barang *daftarBarang, int jumlahBarang) {
    printf("Daftar Barang:\n");
    printf("Kode\t| Nama\t\t| Stok\t| Harga\n");
    printf("-------------------------------------------\n");
    for (int i = 0; i < jumlahBarang; i++) {
        printf("%s   \t| %s   \t| %d\t| Rp.%.2f \n", daftarBarang[i].kode, daftarBarang[i].nama, daftarBarang[i].stok,
               daftarBarang[i].harga);
    }
}

