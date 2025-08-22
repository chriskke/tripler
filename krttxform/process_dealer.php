<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recipient_email = "tripler.buzz@gmail.com"; // recipient email
    // $recipient_email = "shafiq@asiapacific.com.my"; // recipient email
    $from_email = "Triple R <no-reply@tripler.com.my>";
    $subject = "Triple R | Dealer Applications"; // email subject line

    // Sanitize and validate input (FILTER_SANITIZE_STRING is deprecated in PHP 8.1+)
    // $sender_package = filter_var($_POST["package"], FILTER_SANITIZE_SPECIAL_CHARS);
    $sender_name = trim(filter_var($_POST["User_name"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    // $sender_ic = trim(filter_var($_POST["IC"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    // $sender_nationality = trim(filter_var($_POST["nationality"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    // $sender_dob = trim(filter_var($_POST["DOB"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    // $sender_gender = trim(filter_var($_POST["gender"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    $sender_subject = trim(filter_var($_POST["subject"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    $sender_address = trim(filter_var($_POST["Address"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    // $sender_states = trim(filter_var($_POST["states"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    $sender_tel = trim(preg_replace('/[^0-9+\-\s\(\)]/', '', $_POST["Tel_no"] ?? ''));
    $sender_email_raw = $_POST["User_Email"] ?? '';
    $sender_email = filter_var($sender_email_raw, FILTER_VALIDATE_EMAIL);
    // $sender_doi = trim(filter_var($_POST["DOI"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
    $sender_message = trim(filter_var($_POST["Enquiry"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($sender_name) < 4) {
        die('Name is too short or empty');
    }

    if (strlen($sender_message) < 4) {
        die('Too short message! Please enter something');
    }

    if ($sender_email === false) {
        die('Invalid email address');
    }

    $boundary = md5("unique-boundary");

    // Initialize headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from_email\r\n";
    $headers .= "Reply-To: $sender_email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-MSMail-Priority: Normal\r\n";
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

    // Send email (use file log fallback on local dev where no SMTP is configured)
    $serverName = $_SERVER['SERVER_NAME'] ?? '';
    $hostName = $_SERVER['HTTP_HOST'] ?? '';
    $isLocal = php_sapi_name() === 'cli-server' || $serverName === 'localhost' || $serverName === '127.0.0.1' || $hostName === 'localhost' || $hostName === '127.0.0.1';

    // Determine safe redirect URL (back to referring page, defaulting by subject)
    $defaultRedirect = (stripos($sender_subject, 'dealer') !== false) ? '/dealer/?success=1' : '/contact/?success=1';
    $redirectUrl = $defaultRedirect;
    if (!empty($_SERVER['HTTP_REFERER'])) {
        $ref = $_SERVER['HTTP_REFERER'];
        $parsed = parse_url($ref);
        if (isset($parsed['path'])) {
            $path = $parsed['path'];
            // Only allow redirects within this site
            if (strpos($path, '/dealer') === 0 || strpos($path, '/contact') === 0) {
                $redirectUrl = $path . (isset($parsed['query']) && $parsed['query'] !== '' ? '&' : '?') . 'success=1';
            }
        }
    }

    if ($isLocal) {
        $logFile = __DIR__ . DIRECTORY_SEPARATOR . 'dev-mail.log';
        $logContent = "==== DEV MAIL ===="."\r\n".date('c')."\r\nSubject: ".$subject."\r\nTo: ".$recipient_email."\r\n".$headers."\r\n".$body."\r\n\r\n";
        @file_put_contents($logFile, $logContent, FILE_APPEND);
        header("Location: " . $redirectUrl);
        exit();
    } else {
        $sentMail = mail($recipient_email, $subject, $body, $headers);
        if ($sentMail) {
            header("Location: " . $redirectUrl);
            exit();
        } else {
            die('Could not send mail! Please check your PHP mail configuration.');
        }
    }
}
?>
