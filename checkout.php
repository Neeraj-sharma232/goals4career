<?php

$merchantId = 'M22SGF4ZYRXH7'; // Your Merchant ID
$apiKey = "937fdbca-8903-45e8-adf2-009fa8e5aa69"; // Your API Key
$redirectUrl = 'payment-success.php'; // Redirect URL after payment

// Set transaction details
$order_id = uniqid();
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['phone'] ?? '';
$amount = ($_POST['total_price'] ?? 0) * 100; // Convert amount to paise
$description = 'thankyou.php';

$paymentData = array(
    'merchantId' => $merchantId,
    'merchantTransactionId' => uniqid(), // Unique transaction ID
    'merchantUserId' => 'MUID123',
    'amount' => $amount,
    'redirectUrl' => $redirectUrl,
    'redirectMode' => "POST",
    'callbackUrl' => $redirectUrl,
    'merchantOrderId' => $order_id,
    'mobileNumber' => $mobile,
    'message' => $description,
    'email' => $email,
    'shortName' => $name,
    'paymentInstrument' => array(
        'type' => 'PAY_PAGE',
    ),
);

$jsonPayload = json_encode($paymentData);
$encodedPayload = base64_encode($jsonPayload);

$saltKey = '937fdbca-8903-45e8-adf2-009fa8e5aa69'; // Sample Salt Key
$saltIndex = 1; // Sample Salt Index

// Calculate X-VERIFY header
$xVerify = hash('sha256', $encodedPayload . '/pg/v1/pay' . $saltKey) . '###' . $saltIndex;

$requestData = array(
    'request' => $encodedPayload,
);

$request = json_encode($requestData);

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => 'https://api.phonepe.com/apis/hermes/pg/v1/pay',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $request,
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'X-VERIFY: ' . $xVerify,
        'accept: application/json',
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo 'cURL Error #:' . $err;
} else {
    $res = json_decode($response);

    if ($res && isset($res->success) && $res->success == true) {
        // Payment initiated successfully
        $paymentCode = $res->code;
        $paymentMsg = isset($res->message) ? $res->message : 'Payment initiated successfully';
        $payUrl = $res->data->instrumentResponse->redirectInfo->url;

        // Redirect user to the payment URL
        header('Location:' . $payUrl);
    } else {
        // Payment request failed
        $errorMessage = isset($res->message) ? $res->message : 'Unexpected response format';
        echo 'Payment request failed: ' . $errorMessage;

        // Output the full response for debugging
        echo '<pre>';
        print_r($res);
        echo '</pre>';
    }
}
