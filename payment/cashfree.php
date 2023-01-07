 <?php
 
$name = $_POST['name'];
$email = $_POST['email']; 
$mobile = $_POST['phone'];
$url = "https://api.cashfree.com/pg/orders";

$clientID = "10206402d96c9f1128ba37d2cb460201";
$secret = "d8eef1a4fc60b442fb693c5fb69f9516e3529dc";
$id=date('y'.'m'.'d'.'H'.'i'.'s');

curl_setopt($ch, CURLOPT_POST, true);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/json",
"x-api-version: 2022-01-01",
"x-client-id: $clientID",
"x-client-secret: $secret"
));

$data=<<<JSON
{
    "order_id": "order_$id",
  "order_amount": 10.12,
  "order_currency": "INR",
  "order_note": "Additional order info",
  "customer_details": {
   "customer_id": "$id",
    "customer_name": "$name",
    "customer_email": "$email",
    "customer_phone": "$mobile"
    
}
}
JSON;

curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$response=curl_exec($ch);

$decode=json_decode($response);
$link=$decode->payment_link;
header("Location:$link");

?>