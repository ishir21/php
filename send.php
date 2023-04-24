
<?php
if(isset($_POST['submit'])){

// Retrieve the form data
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


// Set the recipient email address
$from = "ishiragrawal02@gmail.com";
$to = "maanavchetty@gmail.com";

// Set the email subject
$subject = "Table Reservation Request";

// Set the email message
$message = "A new table reservation has been requested.\n\n";
$message .= "Date: $date\n";
$message .= "Time: $time\n";
$message .= "Number of Guests: $guests\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Phone Number: $phone\n";


// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "CC: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    echo "Thank you for your reservation request. We'll get back to you soon to confirm your reservation.";
} else {
    // Email failed to send
    echo "Sorry, there was a problem sending your reservation request. Please try again later.";
}
}
?>

