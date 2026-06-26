#include <iostream>  // Library standar untuk Input (cin) dan Output (cout)
#include <string>    // Library untuk memproses tipe data teks (string)
#include <limits>    // Library untuk mengakses batas tipe data, digunakan untuk membersihkan buffer input
#include <iomanip>   // Library untuk mengatur tampilan (formatting), seperti membuat tabel jadi rapi dengan setw()

using namespace std;

// --- STRUKTUR DATA ---
// Mengelompokkan informasi setiap kendaraan dalam satu objek
struct Kendaraan {
    int id;              // ID unik kendaraan
    string merk;         // Nama/Merk kendaraan
    long long hargaSewa; // Harga per hari (long long untuk menampung angka miliaran)
    bool tersedia;       // Status: true (tersedia), false (sedang disewa)
};

// --- FUNGSI REKURSIF PEMBILANG ---
// Mengubah angka menjadi teks Bahasa Indonesia secara otomatis
string pembilang(long long n) {
    string satuan[] = {"", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas"};
    
    if (n < 0) return "Minus " + pembilang(-n);
    if (n >= 0 && n <= 11) return satuan[n];
    if (n < 20) return pembilang(n - 10) + " Belas";
    if (n < 100) return pembilang(n / 10) + " Puluh " + pembilang(n % 10);
    if (n < 200) return "Seratus " + pembilang(n - 100);
    if (n < 1000) return pembilang(n / 100) + " Ratus " + pembilang(n % 100);
    if (n < 2000) return "Seribu " + pembilang(n - 1000); // Penanganan khusus angka 1000-1999
    if (n < 1000000) return pembilang(n / 1000) + " Ribu " + pembilang(n % 1000);
    if (n < 1000000000) return pembilang(n / 1000000) + " Juta " + pembilang(n % 1000000);
    if (n < 1000000000000LL) return pembilang(n / 1000000000) + " Miliar " + pembilang(n % 1000000000);
    
    return "Angka Terlalu Besar";
}

int main() {
    const int TOTAL_UNIT = 30;
    
    // --- DATABASE KENDARAAN ---
    // Harga diestimasi berdasarkan harga pasar sewa kendaraan premium/harian
    Kendaraan daftar[TOTAL_UNIT] = {
        // DATA MOBIL (ID 1-15)
        {1, "Toyota Avanza", 450000, true}, {2, "Honda Civic Type R", 5000000, true},
        {3, "Suzuki Ertiga", 400000, true}, {4, "Mitsubishi Pajero", 1200000, true},
        {5, "Nissan GT-R", 15000000, true}, {6, "BMW M4 Coupe", 8000000, true},
        {7, "Mercedes S-Class", 10000000, true}, {8, "VW Golf GTI", 2500000, true},
        {9, "Ferrari F8", 45000000, true}, {10, "Lamborghini Huracan", 50000000, true},
        {11, "Porsche 911 Turbo", 25000000, true}, {12, "Land Rover Defender", 7000000, true},
        {13, "Ford Mustang GT", 10000000, true}, {14, "Chevrolet Camaro", 9000000, true},
        {15, "Tesla Model S", 6000000, true},
        // DATA MOTOR (ID 16-30)
        {16, "Honda Vario 160", 150000, true}, {17, "Yamaha NMAX 155", 175000, true},
        {18, "Honda Beat", 100000, true}, {19, "Kawasaki ZX-25R", 800000, true},
        {20, "Yamaha R1M", 4500000, true}, {21, "Honda CBR1000RR-R", 4000000, true},
        {22, "Ducati Panigale V4", 6000000, true}, {23, "Vespa Sprint 150", 350000, true},
        {24, "HD Iron 883", 2500000, true}, {25, "BMW S1000RR", 4000000, true},
        {26, "Kawasaki KLX 150", 200000, true}, {27, "Yamaha XMAX 250", 350000, true},
        {28, "Suzuki Hayabusa", 3500000, true}, {29, "KTM Duke 390", 500000, true},
        {30, "RE Classic 350", 600000, true}
    };

    int menu;

    while (true) {
        cout << "\n==============================================" << endl;
        cout << "     RENTAL JAYA -  BEST RENTAL FOR NUSANTARA        " << endl;
        cout << "==============================================" << endl;
        cout << "1. Lihat Katalog Kendaraan\n2. Sewa Kendaraan\n3. Pengembalian Unit\n4. Keluar\nPilih menu (1-4): ";
        
        // --- PROTEKSI INPUT MENU ---
        if (!(cin >> menu)) {
            cout << "[!] Masukkan angka 1 sampai 4!" << endl;
            cin.clear();
            cin.ignore(numeric_limits<streamsize>::max(), '\n');
            continue;
        }

        if (menu == 1) {
            // Tampilan tabel menggunakan iomanip (setw) agar kolom sejajar
            cout << "\n" << left << setw(5) << "ID" << setw(25) << "Merk" << setw(18) << "Harga/Hari" << "Status" << endl;
            cout << string(65, '-') << endl;
            for (int i = 0; i < TOTAL_UNIT; i++) {
                cout << left << setw(5) << daftar[i].id 
                     << setw(25) << daftar[i].merk 
                     << "Rp" << setw(15) << daftar[i].hargaSewa 
                     << (daftar[i].tersedia ? "[Tersedia]" : "[Disewa]") << endl;
                
                // Pembatas visual antara daftar Mobil dan Motor
                if (i == 14) cout << "--------------------- DAFTAR MOTOR ---------------------" << endl;
            }
        } 
        else if (menu == 2) {
            int idPilihan, lamaSewa;
            cout << "\nMasukkan ID Kendaraan yang ingin disewa: "; cin >> idPilihan;
            int idx = idPilihan - 1;

            // Validasi ID dan ketersediaan unit
            if (idx >= 0 && idx < TOTAL_UNIT && daftar[idx].tersedia) {
                cout << "Lama sewa (hari): "; 
                while (!(cin >> lamaSewa)) { // Proteksi jika user input huruf
                    cout << "[!] Masukkan jumlah hari dalam angka: ";
                    cin.clear(); cin.ignore(numeric_limits<streamsize>::max(), '\n');
                }

                long long total = (long long)lamaSewa * daftar[idx].hargaSewa;
                
                // --- FITUR DISKON ---
                if (lamaSewa >= 7) {
                    long long diskon = total * 0.1; // Diskon 10%
                    total -= diskon;
                    cout << ">>> SELAMAT! Anda mendapatkan Diskon 10% karena sewa > 7 hari." << endl;
                }

                cout << "\n------------------------------------------" << endl;
                cout << "Merk Kendaraan : " << daftar[idx].merk << endl;
                cout << "Total Bayar    : Rp" << total << endl;
                cout << "Terbilang      : " << pembilang(total) << " Rupiah" << endl;
                cout << "------------------------------------------" << endl;

                long long uangBayar;
                while (true) {
                    cout << "Masukkan Uang Pembayaran: Rp"; cin >> uangBayar;
                    if (uangBayar >= total) break;
                    cout << "[!] Uang kurang Rp" << total - uangBayar << endl;
                }

                daftar[idx].tersedia = false; // Ubah status kendaraan menjadi disewa
                cout << "\n[BERHASIL] Transaksi Selesai!" << endl;
                if (uangBayar > total) {
                    cout << "Kembalian: Rp" << uangBayar - total << endl;
                    cout << "Terbilang: " << pembilang(uangBayar - total) << " Rupiah" << endl;
                }
            } else {
                cout << "[!]ID tidak ditemukan atau unit sedang disewa orang lain." << endl;
            }
        }
        else if (menu == 3) {
            int idBalik;
            cout << "\nMasukkan ID Kendaraan yang dikembalikan: "; cin >> idBalik;
            if (idBalik >= 1 && idBalik <= TOTAL_UNIT) {
                daftar[idBalik-1].tersedia = true; // Ubah status kembali menjadi tersedia
                cout << "[SUKSES] Unit " << daftar[idBalik-1].merk << " telah kembali." << endl;
            } else {
                cout << "[!] ID Kendaraan tidak valid!" << endl;
            }
        }
        else if (menu == 4) {
            cout << "Terima kasih telah menggunakan jasa Rental Jaya!" << endl;
            break; // Keluar dari loop while(true)
        }
    }

    return 0;
}
