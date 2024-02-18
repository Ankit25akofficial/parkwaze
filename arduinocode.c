#include <WiFiNINA.h>//need to add this to the program
#define sensorPin1 A1
#define sensorPin2 A2
#define sensorPin3 A3
#define sensorPin4 A4
#define sensorPin5 A5
#define sensorPin6 A6

char ssid[] = "test";
char pass[] = "";

int status = WL_IDLE_STATUS;

char server[] = "server name";

String postData1;
String postData2;
String postData3;
String postData4;
String postData5;
String postData6;

String postVariable1 = "space 1";
String postVariable2 = "space 2";
String postVariable3 = "space 3";
String postVariable4 = "space 4";
String postVariable5 = "space 5";
String postVariable6 = "space 6";

WiFiClient client;

void setup() {

  Serial.begin(9600);

  while (status != WL_CONNECTED) {
    Serial.print("Attempting to connect to Network named: ");
    Serial.println(ssid);
    status = WiFi.begin(ssid, pass);
    delay(10000);
  }

  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());
  IPAddress ip = WiFi.localIP();
  IPAddress gateway = WiFi.gatewayIP();
  Serial.print("IP Address: ");
  Serial.println(ip);
}

void loop() {
  int reading1 = analogRead(sensorPin1);
  int reading2 = analogRead(sensorPin2);
  int reading3 = analogRead(sensorPin3);
  int reading4 = analogRead(sensorPin4);
  int reading5 = analogRead(sensorPin5);
  int reading6 = analogRead(sensorPin6);
  if (reading1>1000)
  {
    postData1="Vacant";
  } 
  if (reading1<=1000) 
  {
    postData1="Occupied";
  }
  if (reading2>1000)
  {
    postData2="Vacant";
  } 
  if (reading2<=1000) 
  {
    postData2="Occupied";
  }
  if (reading3>1000)
  {
    postData3="Vacant";
  } 
  if (reading3<=1000) 
  {
    postData3="Occupied";
  }
  if (reading4>1000)
  {
    postData4="Vacant";
  } 
  if (reading4<=1000) 
  {
    postData4="Occupied";
  }
  if (reading5>1000)
  {
    postData5="Vacant";
  } 
  if (reading5<=1000) 
  {
    postData5="Occupied";
  }
  if (reading6>1000)
  {
    postData6="Vacant";
  } 
  if (reading6<=1000) 
  {
    postData6="Occupied";
  }
  


postData1=postVariable1;
postData2=postVariable2;
postData3=postVariable3;
postData4=postVariable4;
postData5=postVariable5;
postData6=postVariable6
  if (client.connect(server, chanel)) {
    client.println("POST /test/post.php HTTP/1.1");
    client.println("Host");
    client.println("Content-Type: application/x-www-form-urlencoded");
    client.print("Content-Length: ");
    client.println(postData1.length());
    client.println();
    client.print(postData1);
    client.println(postData2.length());
    client.println();
    client.print(postData2);
    client.println(postData3.length());
    client.println();
    client.print(postData3);
    client.println(postData4.length());
    client.println();
    client.print(postData4);
    client.println(postData5.length());
    client.println();
    client.print(postData5);
    client.println(postData6.length());
    client.println();
    client.print(postData6);
  }

  if (client.connected()) {
    client.stop();
  }
  Serial.println(postData1,postData2,postData3,postData4,postData5,postData6);

  delay(180000);
}