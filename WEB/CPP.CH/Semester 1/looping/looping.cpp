#include <iostream>
using namespace std;
int main () {
int v;
int nomor=23;
//for digunakan jika tahu persis ingin berapa kali melakukan looping
for (int i=1; i<=23; i++){
	cout<<"siswa ke:"<<i<<endl;
}


//do...while digunakan untuk memastikan kode di dalam dieksekusi minimal 1 kali
do {
	cout<<"masukan nomor siswa:";
	cin>>v;
}while(v<1);
cout<<"siswa nomor:"<<v<<endl;


//while mengambil hasil dari do...while dan menprosesnya
while (v < nomor) {
	v++;
	cout<<"siswa saat ini:"<<v<<endl;
}
	



 return 0;
}
