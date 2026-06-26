#include <iostream>
using namespace std;

int main() {
    int nilai[5][1];
    int total = 0;
    int jumlah;
    double rata;
    

    cout << "Masukkan nilai 5 siswa:\n";
    for (int i = 0; i < 5; i++) {
        cout << "Nilai siswa ke-" << i + 1 << ": ";
        cin >> nilai[i][0];
        total += nilai[i][0];
    }
  	jumlah = total;
    rata = (double)total / 5;

    cout << "\nData Nilai Siswa:\n";
    for (int i = 0; i < 5; i++) {
        cout << "Siswa " << i + 1 << " : " << nilai[i][0] << endl;
    } 

    cout << "\nRata-rata nilai   = " << rata << endl;
    cout <<"\njumlah semua nilai = " << jumlah << endl;

    return 0;
}



