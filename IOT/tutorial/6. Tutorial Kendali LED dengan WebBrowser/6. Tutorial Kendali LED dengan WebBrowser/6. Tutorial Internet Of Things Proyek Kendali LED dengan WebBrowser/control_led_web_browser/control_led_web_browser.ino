#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
 
#define LED 16
 
const char* ssid = "Indobot Online";       // Nama SSID AP/Hotspot
const char* password = "Indobot2015";    // Password Wifi
 
ESP8266WebServer server(80);      //Menyatakan Webserver pada port 80
String webpage;
 
void setup() {
  Serial.begin(115200);
  delay(10);
 
  pinMode(LED, OUTPUT);
 
// Connect to WiFi network ------------------------------------------------
  Serial.println();
  Serial.print("Configuring access point...");
 
// Mengatur WiFi ----------------------------------------------------------
  WiFi.mode(WIFI_AP);                      // Mode Station
  WiFi.begin(ssid, password);               // Mencocokan SSID dan Password
    
// Print status Connect --------------------------------------------------- 
  Serial.println("IP address: ");
  Serial.println(WiFi.softAPIP());
 
// Isi dari Webpage -------------------------------------------------------
  webpage+= "<h1> <center>Kendali LED INSONERS !</center></h1>";
  webpage+= "<br>";
  webpage+= "<center> LED  : </center>";
  webpage+= "<center> <a href=\"LEDON\"\"><button>ON</button></a><a href=\"LEDOFF\"\"><button>OFF</button></a></center>";
         
// Membuat tampilan Webpage -----------------------------------------------
  server.on("/", []() {
    server.send(200, "text/html", webpage);
   });
 
// Bagian ini untuk merespon perintah yang masuk --------------------------
  server.on("/LEDON", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED,HIGH);
    delay(1000);
  });
  server.on("/LEDOFF", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED,LOW);
    delay(1000);
  });
  server.begin();
  Serial.println("Webserver dijalankan");
}
 
void loop() {
   server.handleClient();
}
