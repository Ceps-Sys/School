#include <iostream>
#include <iomanip>

using namespace std;

int main() {
    int pilihan, jumlah;
    double total = 0, bayar, kembalian;
    
    // TAMPILAN MENU
    cout << "=============================================" << endl;
    cout << "           KASIR GRIYA SEJATI                " << endl;
    cout << "=============================================" << endl;
    cout << "1. Nasi Goreng  = Rp 25.000" << endl;
    cout << "2. Mie Goreng   = Rp 22.000" << endl;
    cout << "3. Ayam Bakar   = Rp 35.000" << endl;
    cout << "4. Es Teh       = Rp  5.000" << endl;
    cout << "0. SELESAI & BAYAR" << endl;
    cout << "=============================================" << endl;
    
    // LOOP PESANAN
    while (true) {
        cout << "\nPilih menu (0-4): ";
        cin >> pilihan;
        
        // Jika pilih 0, langsung keluar dari loop untuk bayar
        if (pilihan == 0) break;
        
        // Validasi jika pilihan di luar 1-4
        if (pilihan < 0 || pilihan > 4) {
            cout << "(!) Menu tidak tersedia, silakan pilih lagi." << endl;
            continue;
        }
        
        cout << "Jumlah pesan: ";
        cin >> jumlah;
        
        switch (pilihan) {
            case 1:
                total += 25000 * jumlah;
                cout << "-> " << jumlah << " Nasi Goreng ditambahkan." << endl;
                break;
            case 2:
                total += 22000 * jumlah;
                cout << "-> " << jumlah << " Mie Goreng ditambahkan." << endl;
                break;
            case 3:
                total += 35000 * jumlah;
                cout << "-> " << jumlah << " Ayam Bakar ditambahkan." << endl;
                break;
            case 4:
                total += 5000 * jumlah;
                cout << "-> " << jumlah << " Es Teh ditambahkan." << endl;
                break;
        }
    }
    
    // PROSES PEMBAYARAN
    if (total > 0) {
        // Logika Diskon: Jika belanja > 100rb dapat diskon 10%
        double diskon = (total > 100000) ? total * 0.1 : 0;
        double pajak = (total - diskon) * 0.1; // Pajak 10% setelah diskon
        double grandTotal = total - diskon + pajak;
        
        // TAMPILKAN RINGKASAN BELANJA
        cout << "\n=============================================" << endl;
        cout << "              RINGKASAN PESANAN              " << endl;
        cout << "=============================================" << endl;
        cout << fixed << setprecision(0);
        cout << "Sub Total          : Rp " << total << endl;
        if (diskon > 0) {
            cout << "Diskon (10%)       : -Rp " << diskon << endl;
        }
        cout << "Pajak PPN (10%)    :  Rp " << pajak << endl;
        cout << "---------------------------------------------" << endl;
        cout << "TOTAL HARUS BAYAR  : Rp " << grandTotal << endl;
        cout << "=============================================" << endl;
        
        // INPUT PEMBAYARAN
        while (true) {
            cout << "\nMASUKKAN UANG PEMBAYARAN: Rp ";
            cin >> bayar;
            
            if (bayar >= grandTotal) {
                kembalian = bayar - grandTotal;
                
                // STRUK FINAL
                cout << "\n=============================================" << endl;
                cout << "             BUKTI TRANSAKSI                 " << endl;
                cout << "=============================================" << endl;
                cout << "Total Belanja      : Rp " << grandTotal << endl;
                cout << "Uang Pembayaran    : Rp " << bayar << endl;
                cout << "Uang Kembalian     : Rp " << kembalian << endl;
                cout << "=============================================" << endl;
                cout << "         TRANSAKSI BERHASIL!                 " << endl;
                cout << "      TERIMA KASIH TELAH BERKUNJUNG          " << endl;
                cout << "=============================================" << endl;
                break; // Keluar dari loop pembayaran
            } else {
                double kurang = grandTotal - bayar;
                cout << "(!) Uang Anda kurang Rp " << kurang << ". Silakan input ulang." << endl;
            }
        }
    } else {
        cout << "\n[!] Tidak ada pesanan yang diproses." << endl;
    }
    
    cout << "\nTekan Enter untuk menutup aplikasi...";
    cin.ignore();
    cin.get();
    
    return 0;
}
