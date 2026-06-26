#include <iostream>
using namespace std;
int main () {
	int pilihan,jumlah,total,bayar,kembalian,lagi;
	
	cout<<"========SELAMAT DATANG DI Mamba Coffe========"<<endl;
	cout<<"Menu list:"<<endl; 
	//Array//
	string menu[12]={"1.Americano   Rp","2.Latte       Rp","3.Cappucino   Rp"
	,"4.Green Tea      Rp","5.Matcha Latte   Rp","6.Lemon Tea      Rp"
	,"7.Banana Smotthie  Rp","8.Apple Smoothie   Rp","9.Lemon Smoothie   Rp"
	,"10.Pancake       Rp","11.Onion Rings   Rp","12.Cireng        Rp"};
	int harga[12]={14000,12000,12000,10000,12000,8000,12000,16000,14000,8000,8000,5000};
	cout<<endl<<endl;
	//Looping//
	cout<<"====================================="<<endl;
		cout<<"Coffe Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[0]<<harga[0]<<endl<<menu[1]<<harga[1]<<endl<<menu[2]<<harga[2]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
		cout<<"Non-Coffe Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[3]<<harga[3]<<endl<<menu[4]<<harga[4]<<endl<<menu[5]<<harga[5]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
		cout<<"Smoothie Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[6]<<harga[6]<<endl<<menu[7]<<harga[7]<<endl<<menu[8]<<harga[8]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
			cout<<"Food Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[9]<<harga[9]<<endl<<menu[10]<<harga[10]<<endl<<menu[11]<<harga[11]<<endl;
	}
	cout<<endl<<endl;
	
	 cout<<"====================================="<<endl;
	
	//pemilihan barang dan jumlah pesanan//
	cout<<"Pilih menu:";
	cin>>pilihan;
	if(pilihan <=0 || pilihan >12){
		cout<<"Pesanan anda invalid!!"<<endl;
		return 0;
	}
	cout<<"Jumlah Beli :";
	cin>>jumlah;
	if(jumlah <=0){
		cout<<"Pesanan anda invalid b!!"<<endl;
		return 0;
	}
	
	//menghitung total//
	total=harga[pilihan - 1]*jumlah;
	
	cout<<"\nTotal Bayar   : Rp" <<total<<endl;
	
	//input pembayaran//
	cout<<"Uang dibayarkan: Rp";
	cin>>bayar;
	
	//kondisi Pembayaran//
	if (bayar>=total) {
		kembalian=bayar-total; 
		cout<<"Kembalian: Rp"<<kembalian<<endl;
		cout<<"Terima Kasih telah Memesan"<<endl;
	}else {
		cout<<"Uang Tidak Cukup!"<<endl;
	}
	
	
	
	//pesan lagi//
	cout<<"Ingin Memesan Lagi?Tekan 0"<<endl;
	cin>>lagi;
	while(lagi == 0) {
			cout<<"========SELAMAT DATANG DI Mamba Coffe========"<<endl;
	cout<<"Menu list:"<<endl; 
	//Array//
	string menu[12]={"1.Americano   Rp","2.Latte       Rp","3.Cappucino   Rp"
	,"4.Green Tea      Rp","5.Matcha Latte   Rp","6.Lemon Tea      Rp"
	,"7.Banana Smotthie  Rp","8.Apple Smoothie   Rp","9.Lemon Smoothie   Rp"
	,"10.Pancake       Rp","11.Onion Rings   Rp","12.Cireng        Rp"};
	int harga[12]={14000,12000,12000,10000,12000,8000,12000,16000,14000,8000,8000,5000};
	cout<<endl<<endl;
	//Looping//
	cout<<"====================================="<<endl;
		cout<<"Coffe Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[0]<<harga[0]<<endl<<menu[1]<<harga[1]<<endl<<menu[2]<<harga[2]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
		cout<<"Non-Coffe Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[3]<<harga[3]<<endl<<menu[4]<<harga[4]<<endl<<menu[5]<<harga[5]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
		cout<<"Smoothie Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[6]<<harga[6]<<endl<<menu[7]<<harga[7]<<endl<<menu[8]<<harga[8]<<endl;
	}
	cout<<endl<<endl;
	
	cout<<"====================================="<<endl;
			cout<<"Food Menu:"<<endl;
	for (int i=0; i<1; i++) {
	  cout<<menu[9]<<harga[9]<<endl<<menu[10]<<harga[10]<<endl<<menu[11]<<harga[11]<<endl;
	}
	cout<<endl<<endl;
	
	 cout<<"====================================="<<endl;
	
	//pemilihan barang dan jumlah pesanan//
	cout<<"Pilih menu:";
	cin>>pilihan;
	if(pilihan <=0 || pilihan >12){
		cout<<"Pesanan anda invalid!!"<<endl;
		return 0;
	}
	cout<<"Jumlah Beli :";
	cin>>jumlah;
	if(jumlah <=0){
		cout<<"Pesanan anda invalid b!!"<<endl;
		return 0;
	}
	
	//menghitung total//
	total=harga[pilihan - 1]*jumlah;
	
	cout<<"\nTotal Bayar   : Rp" <<total<<endl;
	
	//input pembayaran//
	cout<<"Uang dibayarkan: Rp";
	cin>>bayar;
	
	//kondisi Pembayaran//
	if (bayar>=total) {
		kembalian=bayar-total; 
		cout<<"Kembalian: Rp"<<kembalian<<endl;
		cout<<"Terima Kasih telah Memesan"<<endl;
	}else {
		cout<<"Uang Tidak Cukup!"<<endl;
	}
	}
return 0;
}
