<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recipient_email = "tripler.buzz@gmail.com"; // recipient email
    // $recipient_email = "shafiq@asiapacific.com.my"; // recipient email
    $from_email = "Triple R <no-reply@tripler.com.my>";
    $subject = "Triple R | Dealer Applications"; // email subject line

    // Sanitize and validate input
    // $sender_package = filter_var($_POST["package"], FILTER_SANITIZE_STRING);
    $sender_name = filter_var($_POST["User_name"], FILTER_SANITIZE_STRING);
    // $sender_ic = filter_var($_POST["IC"], FILTER_SANITIZE_STRING);
    // $sender_nationality = filter_var($_POST["nationality"], FILTER_SANITIZE_STRING);
    // $sender_dob = filter_var($_POST["DOB"], FILTER_SANITIZE_STRING);
    // $sender_gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
    $sender_subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $sender_address = filter_var($_POST["Address"], FILTER_SANITIZE_STRING);
    // $sender_states = filter_var($_POST["states"], FILTER_SANITIZE_STRING);
    $sender_tel = filter_var($_POST["Tel_no"], FILTER_SANITIZE_STRING);
    $sender_email = filter_var($_POST["User_Email"], FILTER_SANITIZE_EMAIL);
    // $sender_doi = filter_var($_POST["DOI"], FILTER_SANITIZE_STRING);
    $sender_message = filter_var($_POST["Enquiry"], FILTER_SANITIZE_STRING);

    if (strlen($sender_name) < 4) {
        die('Name is too short or empty');
    }

    if (strlen($sender_message) < 4) {
        die('Too short message! Please enter something');
    }

    $boundary = md5("unique-boundary");

    // Initialize headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from_email\r\n";
    $headers .= "Reply-To: $sender_email\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Initialize body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    // $body .= "PACKAGE: $sender_package\n";
    $body .= "NAME: $sender_name\n";
    // $body .= "IC: $sender_ic\n";
    $body .= "SUBJECT: $sender_subject\n";
    // $body .= "NATIONALITY: $sender_nationality\n";
    // $body .= "DATE OF BIRTH: $sender_dob\n";
    // $body .= "GENDER: $sender_gender\n";
    $body .= "ADDRESS: $sender_address\n";
    // $body .= "STATES: $sender_states\n";
    $body .= "PHONE NUMBER: $sender_tel\n";
    $body .= "EMAIL: $sender_email\n";
    // $body .= "PREFERRED INSTALLATION DATE: $sender_doi\n";
    $body .= "MESSAGE: $sender_message\n";


    $body .= "--$boundary--";

    // Send email
    $sentMail = mail($recipient_email, $subject, $body, $headers);
    if ($sentMail) {
        header("Location: thanks.php");
        exit();
    } else {
        die('Could not send mail! Please check your PHP mail configuration.');
    }
}
?>
