#include <iostream>
using namespace std;

int main() {
    // Array 2 baris 7 kolom
    string minggu[2][7] = {
        {"Senin ", "Selasa", "Rabu  ", "Kamis ", "Jumat ", "Sabtu ", "Minggu"},
        {"Belajar", "Belajar", "Belajar", "Belajar", "Belajar", "Eskul", "Istirahat"}
    };

    cout << "Jadwal 1 Minggu:\n\n";
    for (int i = 0; i < 7; i++) {
        cout << minggu[0][i] << " : " << minggu[1][i] << endl;
    }
 
    return 0;
}
