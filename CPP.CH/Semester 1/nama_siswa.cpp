#include <iostream>
using namespace std;
int main () {

 string angka[23]={"Willy","Cepi","Firhan","Syahwan","Tama","Rafiq","Hafiz","Rehan","Alta","Rahma","Laisa","Naila","Clarista","Raka","Noval","Asri","Rafael","Faiz","Bagas","jibran","Ridwan","Gervil","Farhan"};
    cout<<"========DAFTAR SISWA========"<<endl;
    for(int i=0; i<23; i++){
    	cout<<i+1<<"."<<angka[i]<<endl;
	}
	return 0;
}
