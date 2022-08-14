<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

           require'PHPMailer/Exception.php';
           require'PHPMailer/PHPMailer.php';
           require'PHPMailer/SMTP.php';

 if(isset($_POST['send']))     
{ 
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $number=$_POST['contect'];
    $address=$_POST['address'];
    $ward=$_POST['ward'];
    $pin=$_POST['pin'];
    $massage=$_POST['massage'];


//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rajputpriyanshu5321@gmail.com';                     //SMTP username
    $mail->Password   = 'nvvfimcoanqcaekb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rajputpriyanshu5321@gmail.com','complainant');
    $mail->addAddress('priyanshukashyap5321@gmail.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'complainant';
    $mail->Body  = "name:$name <br> email:$visitor_email <br>contect:$number <br>
    address:$address<br>ward:$ward<br>pin:$pin<br> massage:$massage";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 header("location:end.html");

}