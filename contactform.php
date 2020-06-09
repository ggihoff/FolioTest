<?php

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];


    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "ggihoff@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "42604100";
    //Set who the message is to be sent from
    $mail->setFrom('mabelhoffmann@gmail.com', $name);
    //Set an alternative reply-to address
    $mail->addReplyTo($mail, $name);
    //Set who the message is to be sent to
    $mail->addAddress('ggihoff@gmail.com', 'Gustavo iglesias');
    //Set the subject line
    $mail->Subject = 'Trabajo';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    $mail->Body = <<<EOT
    Email: {$_POST['mail']}
    Name: {$_POST['name']}
    Message: {$_POST['message']}
    EOT;
    //Attach an image file
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

    $mail->smtpClose();
   header("Location: index.php");
    }
    else {
        echo "no submit";
    }