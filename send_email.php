<?php 
    header('content-Type: application/json');


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    
    require 'vendor/autoload.php';
// ...



    $email   = $_POST['email'];
    $name    = $_POST['name'];
    $subject = $_POST['subject'];
    $msg     = $_POST['message'];

    //create a new PHPMailer instance
    $mail = new PHPMailer(TRUE);

    //try {
        // server settings 
        //$mail->isSMTP(); // Set mailer to use SMTP
        //$mail->Host       = 'smtp.example.com'; // SMTP Server
        //$mail->SMTPAuth   = true; // Enable SMTP Authentication
        //$mail->Username   = 'noreply.olakanmisola042@gmail.com'; // SMTP username
        //$mail->Password   = '*********'; // SMTP password
        //$mail->SMTPSecure = 'tls'; // Enable TLS encryption
        //$mail->Port       = 587 //TCP port to connect to
    

        //Recipient
        //$mail->setFrom('noreply.olakanmisola042@gmail.com');
        //$mail->addAddress($email, $name) // Add a recipient

        //Content
        //$mail->isHTML(true); //Set Email format to HTML
        //$mail->Subject = $subject;
        //$new_msg = 'Thank you for reaching out to Us. We shall get back to you <br>'.$msg;
        //$mail->Body = $new_msg;

        // Send the Email
        //$mail->send();
        //$message = 'Email has been sent successfully!';

        //Send JSON response to frontend
        //$response = array('status'=> 200, 'message'=>$message);
        //echo json_encode($response);
    //}catch (Exception $e){
        //echo "Message could not be sent, Mailer error: {$mail->ErrorInfo}";
        //$message = 'Message could not be sent.';
        // Send JSON response to Frontend
        //$response = array('status'=> 500, 'message'=>$message);
        //echo json_encode($response);
    //}
?>