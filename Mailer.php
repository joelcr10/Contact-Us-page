<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joelcrajudeveloper@gmail.com';
    $mail->Password = 'theholybible';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('joelcrajudeveloper@gmail.com','Joel C Raju');

    $mail->addAddress('joelcrajudeveloper@gmail.com');

    $mail->isHTML(true);

    $contactName = $_POST['contactName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $faxNumber = $_POST['faxNumber'];
    $address = $_POST['address'];
    $requirements = $_POST['requirements'];

    $mail->Subject = 'Email from Localhost using PHP';

    //$bodyContent = '<h1>How to send email from localhost using php</h1>'.$name;
    $bodyContent = '<p>Contact Name: '.$contactName.
                    '<br>Company Name: '.$companyName. 
                    '<br>Email address: '.$email.
                    '<br>Phone Number: '.$phoneNumber. 
                    '<br>Fax Number: '.$faxNumber. 
                    '<br>Address: '.$address.
                    '<br>Requirements: '.$requirements.'</p>';
    $mail->Body = $bodyContent;

    if(!$mail->send())
    {
        echo 'message could not be sent'.$mail->ErrorInfo;
    }
    else
    {
        echo 'message has been sent';
    }


?>
