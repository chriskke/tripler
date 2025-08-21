<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $recipient_email = "chris552611@gmail.com"; // recipient email
    $from_email = "companyname <no-reply@companyname.com>";
    $subject = "companyname Enquiry"; // email subject line

    // Sanitize and validate input
    $sender_name = filter_var($_POST["User_name"], FILTER_SANITIZE_STRING);
    $sender_gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
    $sender_subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $sender_address = filter_var($_POST["Address"], FILTER_SANITIZE_STRING);
    $sender_states = filter_var($_POST["states"], FILTER_SANITIZE_STRING);
    $sender_tel = filter_var($_POST["Tel_no"], FILTER_SANITIZE_STRING);
    $sender_email = filter_var($_POST["User_Email"], FILTER_SANITIZE_EMAIL);
    $sender_message = filter_var($_POST["Enquiry"], FILTER_SANITIZE_STRING);

    if (strlen($sender_name) < 4) {
        die('Name is too short or empty');
    }

    if (strlen($sender_message) < 4) {
        die('Too short message! Please enter something');
    }

    $attachments = $_FILES['file'];
    $file_count = count($attachments['name']); // count total files attached
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
    $body .= "NAME: $sender_name\n";
    $body .= "GENDER: $sender_gender\n";
    $body .= "ADDRESS: $sender_address\n";
    $body .= "SUBJECT: $sender_subject\n";
    $body .= "STATES: $sender_states\n";
    $body .= "PHONE NUMBER: $sender_tel\n";
    $body .= "EMAIL: $sender_email\n";
    $body .= "MESSAGE: $sender_message\n";

    // Attachments
    for ($x = 0; $x < $file_count; $x++) {
        if (!empty($attachments['name'][$x])) {
            if ($attachments['error'][$x] > 0) {
                $error_messages = [
                    1 => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
                    2 => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                    3 => "The uploaded file was only partially uploaded",
                    4 => "No file was uploaded",
                    6 => "Missing a temporary folder"
                ];
                die($error_messages[$attachments['error'][$x]] ?? 'Unknown upload error');
            }

            // Get file info
            $file_name = $attachments['name'][$x];
            $file_size = $attachments['size'][$x];
            $file_type = $attachments['type'][$x];

            // Read file
            $file_content = file_get_contents($attachments['tmp_name'][$x]);
            $encoded_content = chunk_split(base64_encode($file_content));

            $body .= "--$boundary\r\n";
            $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
            $body .= $encoded_content . "\r\n";
        }
    }

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
