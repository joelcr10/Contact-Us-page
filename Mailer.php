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

    $mail->Subject = 'Order for'.$contactName;

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
        //echo 'message could not be sent'.$mail->ErrorInfo;
        echo "<script>alert('Email could not be sent');</script>";
    }
    else
    {
        //echo 'message has been sent';
        echo "<script>alert('The Email has been sent');window.history.back()</script>";
    }

    ///////////Code to send the copy of mail to the customer//////////////////////////////
    
    $mail2 = new PHPMailer;

    $mail2->isSMTP();
    $mail2->Host = "smtp.gmail.com";
    $mail2->Username = "joelcrajudeveloper@gmail.com";
    $mail2->Password = "theholybible";
    $mail2->SMTPAuth = true;
    $mail2->SMTPSecure = 'tls';
    $mail2->Port = 587;

    $mail2->setFrom('joelcrajudeveloper@gmail.com','Gilead Exports');

    $mail2->addAddress($email);

    $mail2->isHTML(true);

    
    $mail2->Subject = "Automated reply from Gilead Exports";
    $bodyContent = '<p>Thank you '.$contactName.' for contacting Gilead Exports,
    we will get back to you shortly</p>';
    $mail2->Body = $bodyContent;

    if(!$mail2->send())
    {
        echo "<scipt>alert('email not sent');.window.history.back()</script>";
    }
    else
    {
        echo "<scipt>alert('email sent');.window.history.back()</script>";
    }


    

?>