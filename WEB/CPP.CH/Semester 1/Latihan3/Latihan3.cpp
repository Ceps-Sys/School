#include <iostream>
using namespace std;

int main () {

	//Variabel
	string nama ;
	int umur ;
	string jenis_kelamin ;
	char golongan_darah ;
	string alamat ;
	string hobi ;
	string cita_cita ;
	string email ;
	string nama_sekolah ;
	int nis ;
	
	
	
	//Masukannya
	cout << "masukan nama anda          : ";cin >> nama;
	cout << "masukan umur anda          : ";cin >> umur;
	cout << "masukan jenis kelamin anda : ";cin >>jenis_kelamin;
	cout << "masukan golongan darah anda: ";cin >> golongan_darah;
	cout << "masukan alamat anda        : ";cin >> alamat;
	cout << "masukan hobi anda          : ";cin >>  hobi;
	cout << "masukan cita cita anda     : ";cin >> cita_cita;
	cout << "masukan email anda         : ";cin >> email;
	cout << "masukan nama sekolah       : ";cin >> nama_sekolah;
	cout << "masukan nis anda           : ";cin >> nis;
	cout<<endl<<endl;
	    
	//keluarannya
	cout << "=====DATA SISWA=====" <<endl;
	cout << "Nama          : " << nama <<endl;
	cout << "Umur          : " << umur <<endl;
	cout << "kelamin       : " << jenis_kelamin <<endl;
	cout << "Golongan darah: " << golongan_darah <<endl;
	cout << "Alamat        : " << alamat <<endl;
	cout << "Hobi          : " << hobi <<endl;
	cout << "Cita cita     : " << cita_cita <<endl;
	cout << "Email         : " << email <<endl;
	cout << "Nama Sekolah  : " << nama_sekolah << endl;
	cout << "Nis           : " << nis << endl;
	 
	
	return 0;
}
