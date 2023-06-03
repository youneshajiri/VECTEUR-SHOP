<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Retrieve form data
$name = $_POST['name'];
$number = $_POST['number'];
$order = $_POST['order'];
$additionalProduct = $_POST['additionalProduct'];
$quantity = $_POST['quantity'];
$dateAndTime = $_POST['dateAndTime'];
$address = $_POST['address'];
$message = $_POST['message'];

// Compose email
$to = 'your-email@gmail.com';
$subject = 'New Order';
$body = "Name: $name\n";
$body .= "Number: $number\n";
$body .= "Order: $order\n";
$body .= "Additional Product: $additionalProduct\n";
$body .= "Quantity: $quantity\n";
$body .= "Date and Time: $dateAndTime\n";
$body .= "Address: $address\n";
$body .= "Message: $message\n";

// Set headers
$headers = "From: your-email@gmail.com\r\n";
$headers .= "Reply-To: $name <$email>\r\n";

// Send email
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Thank you for your order! We will contact you shortly.';
} else {
    echo 'Oops! Something went wrong. Please try again.';
}
?>
</body>
</html>