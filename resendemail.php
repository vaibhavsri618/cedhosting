
<?php



session_start();
if (isset($_SESSION)) {
    $email=$_SESSION['email'];
    $name=$_SESSION['name'];
    $mobile=$_SESSION['mobile'];


   

}
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require '/home/cedcoss/vendor/autoload.php';


?>

 <div id="validemail">
        <?php
        if (isset($_POST['email'])) {
            $otp = rand(1000, 9999);
            $_SESSION['otp'] = $otp;
            $mail = new PHPMailer();
            try {
                $mail->isSMTP(true);
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'vaibhavsri618@gmail.com';
                $mail->Password = '8009652584';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setfrom('vaibhavsri618@gmail.com', 'CedHosting');
                $mail->addAddress($email);
                $mail->addAddress($email, $name);

                $mail->isHTML(true);
                $mail->Subject = 'Account Verification';
                $mail->Body = 'Hi User,Here is your otp for account verification' . $otp;
                $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                $mail->send();
                header('location: validation.php?email=' . $email);
            } catch (Exception $e) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        }

        ?>


        </div>


        