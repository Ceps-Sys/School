#include <iostream>
using namespace std;

int main() {
    string nama[100];
    int stok[100];
    string satuan[100];
    int jumlahBarang = 0;

    int pilihan;

    do {
        cout << "=== MENU GUDANG ===" <<endl;
        cout << "1. Lihat Stok" <<endl;
        cout << "2. Barang Masuk" <<endl;
        cout << "3. Barang Keluar" <<endl;
        cout << "0. Keluar" <<endl;
        cout << "Pilih: ";
        cin >> pilihan;

        if (pilihan == 1) {
            cout << "=== STOK ===" <<endl;
            for (int i = 0; i < jumlahBarang; i++) {
                cout << nama[i] << " : " << stok[i] << " " << satuan[i] << endl;
            }
            if (jumlahBarang == 0) {
                cout << "Belum ada barang." <<endl;
            }
        }

        else if (pilihan == 2) {
            cout << "Nama barang: ";
            cin >> nama[jumlahBarang];
            cout << "Jumlah: ";
            cin >> stok[jumlahBarang];
            cout << "Satuan (box/pcs/dll): ";
            cin >> satuan[jumlahBarang];
            jumlahBarang++;
            cout << "Barang ditambahkan!" <<endl;
        }

        else if (pilihan == 3) {
            string cari;
            int jumlah;

            cout << "Nama barang: ";
            cin >> cari;
            cout << "Jumlah keluar: ";
            cin >> jumlah;

            bool ketemu = false;

            for (int i = 0; i < jumlahBarang; i++) {
                if (nama[i] == cari) {
                    if (stok[i] >= jumlah) {
                        stok[i] -= jumlah;
                        cout << "Barang keluar!" <<endl;
                    } else {
                        cout << "Stok tidak cukup!" <<endl;
                    }
                    ketemu = true;
                }
            }

            if (!ketemu) {
                cout << "Barang tidak ditemukan!" <<endl;
            }
        }

    } while (pilihan != 0);

    cout << "Program selesai." <<endl;
    return 0;
}
