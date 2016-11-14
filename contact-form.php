<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];  
        }
        if (isset($_POST['number'])) {
            $number = $_POST['number']; 
        }
        if (isset($_POST['message'])) {
            $message = $_POST['message']; 
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email']; 
        }
        
        validate_form($name, $email, $message);
        require_once 'swiftmailer-5.x/lib/swift_required.php';

        // Create the mail transport configuration
        $transport = Swift_MailTransport::newInstance();

        // Create the message
        $message = Swift_Message::newInstance();
        $message->setTo(array(
          "linde.henry@gmail.com" => "Aurelio De Rosa",
          "henry.linde@gmail.com" => "Audero"
        ));
        $message->setSubject("This email is sent using Swift Mailer");
        $message->setBody("You're our best client ever.");
        $message->setFrom("18168965@sun.ac.za", "18168965");

        // Send the email
        $mailer = Swift_Mailer::newInstance($transport);
        $mailer->send($message);
        header('Location: '.'/wesc/contact.php?success=Your Email was sent successfully.');
    }

    function validate_form($name, $email, $message) {
        $error = '';
        if (empty($name)) {
            $error .= "No Name Entered<br>";
        }
        
        if (empty($email)) {
            $error .= 'No Email Entered<br>';
        }
        
        if (empty($message)) {
            $error .= "Blank Message <br>,";
        }
        
        if (!empty($error)) {
            header('Location: '.'/wesc/contact.php?error='.$error);
        }
    }

    function mail_utf8($to='linde.henry@gmail.com', $from_user, $from_email, $subject = 'Webiste Contact', $message)
       { 
          $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
          $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

          $headers = "From: $from_user <$from_email>\r\n". 
                   "MIME-Version: 1.0" . "\r\n" . 
                   "Content-type: text/html; charset=UTF-8" . "\r\n"; 

         return mail($to, $subject, $message, $headers); 
       }
?>