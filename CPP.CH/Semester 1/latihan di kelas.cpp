#include <iostream>
using namespace std;

int main () {
	//Membuat Variabel
	string nama ;
	int umur ;
	char golongan_darah ;
	 string alamat ;
	
	//Membuat Inputan
	cout << "          masukan nama anda:";getline(cin, nama);
	cout << "          masukan umur anda:";cin>> umur;
	cout << "masukan golongan darah anda:";cin >> golongan_darah;
	cin.ignore(); //Ini di pakai agar newline bisa di buang
	cout << "        masukan alamat anda:";getline(cin, alamat);
	    cout<<endl<<endl;
	    
	//Hasil Outputnya
	cout << "          Nama:" << nama <<endl;
	cout << "          Umur:" << umur <<endl;
	cout << "Golongan darah:" << golongan_darah <<endl;
	cout << "        Alamat:" << alamat <<endl;
	 
	
	return 0;
}
