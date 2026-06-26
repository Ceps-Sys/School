#include <iostream>
using namespace std;
int main  () {
	
 int nilai;

cout<<"Masukan Hasil Nilai Anda     :"<<endl;
cin>>nilai;
 if (nilai >80 && nilai <=100) {
 	cout<<"Nilai Kamu Adalah A!"<<endl;
 }else if (nilai >70 && nilai <=80) {
 	cout<<"Nilai Kamu Adalah B"<<endl;
 }else if (nilai >55 && nilai <=70) {
 	cout<<"nilai Kamu Adalah C"<<endl;
 }else {
 	cout<<"Nilai Kamu Masih Kurang!"<<endl;
 }
return 0;
}
