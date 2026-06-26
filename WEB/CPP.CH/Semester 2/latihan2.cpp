#include<iostream>
using namespace std;
int main () {
	//array//
	string barang[5]={" Beras"," Gula"," Minyak"," Susu"," Mie Instan"};
	int harga[5]={12000,14000,18000,15000,3000};
	
	
	//variabel penampung pilihan,jumlah,total,bayar dan,kembalian//
	int pilihan,jumlah,total,bayar,kembalian;
	
	//tampilan//
	cout<<"====== MINI MARKET SEDERHANA ======"<<endl<<endl;
	
	//looping//
	for (int i=0; i<5; i++) {
  cout<<i+1<<"."<<barang[i]<<" || Rp"<<harga[i]<<endl;
  }
  
  cout<<endl<<endl;
	//pemilihan barang//
	cout<<"Pilih Barang (1-5):";
	cin>>pilihan;
	
	if(pilihan <1 && pilihan >5){
		cout<<"Maaf Barang Tidak Tersedia"<<endl;
	}
	
	//jumlah beli//
	cout<<"Jumlah Beli :";
	cin>>jumlah;
	
	//menghitung total//
	total=harga[pilihan - 1]*jumlah;
	
	cout<<"\nTotal Bayar   : Rp" <<total<<endl;
	
	//input pembayaran//
	cout<<"Uang dibayarkan: Rp";
	cin>>bayar;
	
	//kondisi pembayaran//
	if (bayar>=total) {
		kembalian=bayar-total;
		cout<<"Kembalian: Rp"<<kembalian<<endl;
		cout<<"Terima Kasih telah berbelanja??"<<endl;
	}else {
		cout<<"Uang Tidak Cukup!"<<endl;
	}
	
	
	
	
	return 0;
}
