#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#define LED 16
const char* ssid = "Deni";  //Nama SSID 
const char* password = "deni1235"; //Password WiFi

ESP8266WebServer server(80); //Menyalakan WebServer pada port 80
String webpage;

void setup () {
  Serial.begin(115200)  ;
  delay(10);
  pinMode(LED, OUTPUT);

 //Connect to WiFi network 
 Serial.println();
 Serial.println("Configuring access point...");
 WiFi.softAP(ssid,password);
 IPAddress myIP = WiFi.softAPIP();
 
 //Mengatur WiFi
 WiFi.mode(WIFI_AP);    //Mode Station
 WiFi.begin(ssid,password);    //Mencocokan SSID dan Password


 //Print Status Connect
 Serial.println("IP Address:");
 Serial.print(WiFi.softAPIP());


 //Isi dari Webpage
 webpage+="<h1><center>Kendali LED INSONERS!</center></h1>";
 webpage+="<br>";
 webpage+="<center>LED :</center>";
 webpage+="<center><a href=\"LEDON\"\"><button>ON</button></a><a href=\"LEDOFF\"\"></a></center>";
 

//Membuat tampilan Webpage
 server.on("/", [] () {
  server.send(200,"text,html",webpage);
  });

//Bagian ini untuk merespon perintah yang masuk
server.on("/LEDON", []() {
  server.send(200, "text/html", webpage);
  digitalWrite(LED,HIGH);
  delay(1000);
  });
server.on("/LEDOFF",[](){
  server.send(200,"text/html",webpage);
  digitalWrite(LED,LOW);
  delay(1000);
  });
server.begin();
 Serial.println("Web Server Dijalankan");
}  
  

  
void loop () {
  server.handleClient();    
}
