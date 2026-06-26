#include <iostream>
using namespace std;
int  main () {
	//dari a s.d b
 string nama [5]={" Adi Nugroho"," Afrah Ohryza"," Daveize Alibama"," Derril Nugraha"," Dzaky Naufal"};
 string kelas [5]={" X-RPL"," X-TKJ"," X-TBSM"," X-FKK"," X-MP"};

for (int i=0; i<5; i++) {
  cout<<i+1<<"."<<nama[i]<<kelas[i]<<endl;
  }
  cout<<endl<<endl<<endl;
  
  	// dari c s.d g
  	int absen;
  	string nis1=" 2526001",nis2=" 2526002",nis3=" 2526003",nis4=" 2526004",nis5=" 2526005";
  	
  	cout<<"Masukan Nomor Absen :";
	cin>>absen;
	
	if(absen == 1) {
	cout<<"Nama Siswa : "<<nama [5-5]<<endl;
	cout<<"Kelas      : "<<kelas [5-5]<<endl;
	cout<<"Nis        : "<<nis1<<endl;
	}else if (absen == 2) {
	 cout<<"Nama Siswa : "<<nama [5-4]<<endl;
	 cout<<"Kelas      : "<<kelas [5-4]<<endl;
	 cout<<"Nis        : "<<nis2<<endl;
	}else if (absen == 3) {
	 cout<<"Nama Siswa : "<<nama [5-3]<<endl;
	 cout<<"Kelas      : "<<kelas [5-3]<<endl;
	 cout<<"Nis        : "<<nis3<<endl;
	}else if (absen == 4) {
	 cout<<"Nama Siswa : "<<nama [5-2]<<endl;
	 cout<<"Kelas      : "<<kelas [5-2]<<endl;
	 cout<<"Nis        : "<<nis4<<endl;
	}else if (absen == 5) {
	 cout<<"Nama Siswa : "<<nama [5-1]<<endl;
	 cout<<"Kelas      : "<<kelas [5-1]<<endl;
	 cout<<"Nis        : "<<nis5<<endl;
	}else {
	cout<<"Nomor Absen Tidak Valid!"<<endl;
	}

 
return 0;
}
