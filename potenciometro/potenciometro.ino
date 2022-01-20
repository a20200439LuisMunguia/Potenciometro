void setup() {
  Serial.begin(9600);
}

void loop() {
  Serial.print("Dato: ");
  Serial.println(analogRead(A0));
  delay(1000);
}