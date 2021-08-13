<?php
session_start();

$product_name = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];
$image = $_POST['image'];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_eb2310c2401266377636edb1cf5",
                  "X-Auth-Token:test_ac1aa753a6cf897e389b6deda4e"));
$payload = Array(
    'purpose' => $product_name,
    'amount' => $total,
    'buyer_name' => $_SESSION['name'],
    'redirect_url' => 'http://localhost/social/website/thankyou.php',
    'send_email' => true,
    'email' => $_SESSION['cemail'],
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$response = json_decode($response);

$_SESSION['tid'] = $response->payment_request->id;
header('location:'.$response->payment_request->longurl);
die();

?>
<?php 
session_start();
echo '<pre>';
print_r($_REQUEST);
?>