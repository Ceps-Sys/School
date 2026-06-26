#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
 
#define LED1 14
#define LED2 12
#define LED3 13
#define LED4 15
 
const char* ssid = "Indobot Online";       // Nama SSID AP/Hotspot
const char* password = "Indobot2015";    // Password Wifi
 
ESP8266WebServer server(80);      //Menyatakan Webserver pada port 80
String webpage;
 
void setup() {
  Serial.begin(115200);
  delay(10);
 
  pinMode(LED1, OUTPUT);
  pinMode(LED2, OUTPUT);
  pinMode(LED3, OUTPUT);
  pinMode(LED4, OUTPUT);
  
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
  webpage+= "<h1> <center>Kendali 4 Led INSONERS !</center></h1>";
  webpage+= "<br>";
  webpage+= "<center> LED 1  : </center>";
  webpage+= "<center> <a href=\"LED1ON\"\"><button>ON</button></a><a href=\"LED1OFF\"\"><button>OFF</button></a></center>";
   webpage+= "<br>";
  webpage+= "<center> LED 2  : </center>";
  webpage+= "<center> <a href=\"LED2ON\"\"><button>ON</button></a><a href=\"LED2OFF\"\"><button>OFF</button></a></center>";
   webpage+= "<br>";
  webpage+= "<center> LED 3  : </center>";
  webpage+= "<center> <a href=\"LED3ON\"\"><button>ON</button></a><a href=\"LED3OFF\"\"><button>OFF</button></a></center>";
   webpage+= "<br>";
  webpage+= "<center> LED 4  : </center>";
  webpage+= "<center> <a href=\"LED4ON\"\"><button>ON</button></a><a href=\"LED4OFF\"\"><button>OFF</button></a></center>";
        
// Membuat tampilan Webpage -----------------------------------------------
  server.on("/", []() {
    server.send(200, "text/html", webpage);
   });
 
// Bagian ini untuk merespon perintah yang masuk --------------------------
  server.on("/LED1ON", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED1,HIGH);
    delay(1000);
  });
 server.on("/LED2ON", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED2,HIGH);
    delay(1000);
  });
  server.on("/LED3ON", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED3,HIGH);
    delay(1000);
  });
  server.on("/LED4ON", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED4,HIGH);
    delay(1000);
  });
  
  server.on("/LED1OFF", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED1,LOW);
    delay(1000);
  });
 server.on("/LED2OFF", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED2,LOW);
    delay(1000);
  });
  server.on("/LED3OFF", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED3,LOW);
    delay(1000);
  });
  server.on("/LED4OFF", []() {
    server.send(200, "text/html", webpage);
    digitalWrite(LED4,LOW);
    delay(1000);
  });
  
  server.begin();
  Serial.println("Webserver dijalankan");
}
 
void loop() {
   server.handleClient();
}
