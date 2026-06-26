#include <iostream>
using namespace std;

int main () {
	//operator matematika untuk menghitung nilai
    int a = 10 ;
	int b = 20 ;

	int tambah = a + b ;
	int pengurangan = b - a ;
	int perkalian = a* a ;
	int pembagian = b / a;
	int modulus = a % a ;
	

	
	//output
	
	
	cout <<"Hasil Penjumlahan: "<<tambah <<endl;
	cout <<"Hasil Pengurangan: "<<pengurangan <<endl;
	cout <<"Hasil Perkalian  : "<<perkalian <<endl;
	cout <<"Hasil Pembagian  : "<<pembagian <<endl;
	cout <<"Hasil Modulus    : "<<modulus <<endl;
	cout<<endl<<endl<<endl;
	
	/*operator pembandingan digunakan untuk membandingkan 2 variabel
	
	== digunakan untuk membandingkan variabel yang sama
	<  digunakan untuk membandingkan variabel dengan angka lebih kecil
	>  digunakan untuk membandingkan variabel dengan angka lebih besar
	<= digunakan untuk angka dimulai dari angka itu sendiri sampai lebih kecil
	>= digunakan untuk angka dimulai dari angka itu sendiri sampai lebih besar
	!= digunakan jika tidak sama dengan 
	
	*/
	//ini contoh perbandingan ngambil dari yang atas variabelnya
	int perbandingan_samadengan= a == b;
	int perbandingan_tidaksamadengan= a != b;
	int perbandingan_lebihkecil= a < b;
	int perbandingan_lebihbesar= a > b;
	
	
	
	cout<<"Hasil Perbandingan Sama Dengan      : "<<perbandingan_samadengan<<endl;
	cout<<"Hasil Perbandingan Tidak Sama Dengan: "<<perbandingan_tidaksamadengan<<endl;
	cout<<"hasil Perbandingan Lebih Kecil      : "<<perbandingan_lebihkecil<<endl;
	cout<<"Hasil Perbandingan Lebih Besar Dari : "<<perbandingan_lebihbesar<<endl;
	
	/*materi operator logika
	Digunakan menggabungkan 2/lebih variabel,terdapat beberapa simbol yang digunakan diantaranya
	AND &&
	menghasilkan nilai true/benar apabila semua imputanya benar
	OR ||
	menghasilkan nilai true/benar apabila salah satu nilai nya benar
	NOT !
	membalikan keadaan yang tadinya true akan menjadi FALSE
	
	
	
		
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	return 0;
}
