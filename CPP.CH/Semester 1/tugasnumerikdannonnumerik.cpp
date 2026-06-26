#include <iostream>
using namespace std;

int main() {
    // Warna: \033[ kode m
    string yellow   = "\033[33m";
    string green = "\033[32m";
    string blue  = "\033[34m";
    string reset = "\033[0m"; // reset warna

    // Data siswa
    string nama = "Cepi Handani";
    int umur = 15;
    string alamat = "Jl.Babakan Saluyu";

    cout << green << "=== Data Siswa ===" << reset << endl;
    cout << blue  << "Nama   : " << reset << nama << endl;
    cout << blue  << "Umur   : " << reset << umur << " tahun" << endl;
    cout << blue  << "Alamat : " << reset << alamat << endl;

    cout << yellow << "\ntetap semangat walau hidup suka bercanda" << reset << endl;

    return 0;
}
