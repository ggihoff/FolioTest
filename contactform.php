
<?php


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = 'trabajo';
    $mail = $_POST['mail'];
    $message = $_POST['message']; 
    
    $youremail = 'gustavoiglesias_04@hotmail.com';
    $to = $youremail;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n";
    $headers .= "From: ".$mail;
    $txt = "Recibiste un mail de ".$name.".\n\n".$message;
    mail($to, $subject, $txt, $headers);
echo "hi";
    header("Location: index.php?mailsend");

} 