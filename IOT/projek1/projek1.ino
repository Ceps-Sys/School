#define LED_BUILTIN_PIN 2 // 1. Tambahkan spasi dan pastikan nomor pin sesuai

void setup() {
  // 2. pinMode butuh dua parameter: (nomor_pin, mode)
  pinMode(LED_BUILTIN_PIN, OUTPUT); 
}

void loop() {
  // 3. LOW biasanya mematikan LED (tergantung rangkaian)
  digitalWrite(LED_BUILTIN_PIN, LOW);
  delay(1000);

  // 4. HIGH menyalakan LED
  digitalWrite(LED_BUILTIN_PIN, HIGH);
  delay(1000);
}