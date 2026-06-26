
#define BLYNK_TEMPLATE_ID "TMPL6pRwbVA1L"
#define BLYNK_TEMPLATE_NAME "projek1"
#define BLYNK_AUTH_TOKEN "yfUd1ovZ_Xk71v_wfV_eWIvVLqldcndG"

#include <ESP8266WiFi.h>
#include <BlynkSimpleEsp8266.h>

// Info WiFi
char ssid[] = "cepcep";        // Ganti dengan SSID WiFi kamu
char pass[] = "12345678";      // Ganti dengan Password WiFi kamu

// Mendefinisikan pin relay
#define RELAY1 5   // Relay 1 terhubung ke pin D1
#define RELAY2 D2   // Relay 2 terhubung ke pin D2

void setup() {
  // Memulai komunikasi serial
  Serial.begin(115200);
  delay(10);

  // Connect ke Wi-Fi
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, pass);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());

  Blynk.begin(BLYNK_AUTH_TOKEN, ssid, pass);

  // Mengatur pin relay sebagai output
  pinMode(RELAY1, OUTPUT);
  pinMode(RELAY2, OUTPUT);

  // Menonaktifkan relay di awal
  digitalWrite(RELAY1, HIGH);
  digitalWrite(RELAY2, HIGH);
}

// Fungsi untuk kontrol relay dari Blynk
BLYNK_WRITE(V0) {
  int pinValue = param.asInt(); 
  digitalWrite(RELAY1, pinValue == 1 ? LOW : HIGH);
}

BLYNK_WRITE(V1) {
  int pinValue = param.asInt(); 
  digitalWrite(RELAY2, pinValue == 1 ? LOW : HIGH);
}

void loop() {
  Blynk.run();
}

