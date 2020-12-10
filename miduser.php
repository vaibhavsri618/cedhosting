<?php

require 'classes/Dbconnect.php';
require 'classes/user.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require '/home/cedcoss/vendor/autoload.php';

session_start();

if (isset($_POST['submit1'])) {

    $error = array();

    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";
    $ques = isset($_POST['ques']) ? $_POST['ques'] : "";
    $ans = isset($_POST['ans']) ? $_POST['ans'] : "";

    if ($name == "" || $mobile == "" || $email == "" || $password == "" || $repassword == "" || $ques == "Select a Security question" || $ans == "") {
        echo '<script>alert("Field cant be empty")
        window.location="account.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "Field cant be empty");
    }
    $password = md5($password);

    $user = new user();
    $dbconnect = new Dbconnect();
    $display = $user->seeuser($dbconnect->conn, $email);
    if ($display == "") {
        $display = 0;
    }

    if ($display != 0) {
        echo '<script>alert("User already present")
    window.location="account.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "User already present");
    }

    if (count($error) == 0) {

        $display = $user->registration($dbconnect->conn, $name, $mobile, $email, $password, $ques, $ans);
        $_SESSION['mobile']=$mobile;
        $_SESSION['email']=$email;
        $_SESSION['name']=$name;
        $_SESSION['mobile']=$mobile;
        // $otp = rand(1000, 9999);
        // $_SESSION['otp'] = $otp;
        // $mail = new PHPMailer();
        // try {
        //     $mail->isSMTP(true);
        //     $mail->Host = 'smtp.gmail.com';
        //     $mail->SMTPAuth = true;
        //     $mail->Username = 'vaibhavsri618@gmail.com';
        //     $mail->Password = '8009652584';
        //     $mail->SMTPSecure = 'tls';
        //     $mail->Port = 587;

        //     $mail->setfrom('vaibhavsri618@gmail.com', 'CedHosting');
        //     $mail->addAddress($email);
        //     $mail->addAddress($email, $name);

        //     $mail->isHTML(true);
        //     $mail->Subject = 'Account Verification';
        //     $mail->Body = 'Hi User,Here is your otp for account verification' . $otp;
        //     $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        //     $mail->send();
        //     header('location: validation.php?email=' . $email);
        // } catch (Exception $e) {
        //     echo "Mailer Error: " . $mail->ErrorInfo;
        // }



        // $otp1 = rand(1000, 9999);
        // $_SESSION['otp1'] = $otp1;

        // $fields = array(
        //     "sender_id" => "FSTSMS",
        //     "message" => "Hello ".$name." your otp is - ".$otp1."",
        //     "language" => "english",
        //     "route" => "p",
        //     "numbers" => $mobile,
        // );
        
        // $curl = curl_init();
        
        //     curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_SSL_VERIFYHOST => 0,
        //     CURLOPT_SSL_VERIFYPEER => 0,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => json_encode($fields),
        //     CURLOPT_HTTPHEADER => array(
        //     "authorization: TvcZmyoFijfAeXuqNGJ9lpURtnC4kgQ1shVBr8SOK2PDaMwzL0Crs0VYmiQ1LS2lqjPD9nvOGfFTuX8K",
        //     "accept: */*",
        //     "cache-control: no-cache",
        //     "content-type: application/json"
        //     ),
        //     )
        //     );

        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        
        // curl_close($curl);
        
        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   echo $response;
        // }

    }

}

if (isset($_POST['loginsubmit'])) {
    $email = "";
    $name = "";
    $userid = "";
    $active;
    $admin;

    $error = array();

    $loginemail = isset($_POST['loginemail']) ? $_POST['loginemail'] : "";
    $loginpass = isset($_POST['loginpass']) ? $_POST['loginpass'] : "";

    if ($loginemail == "" && $loginpass == "") {
        echo '<script>alert("Field cant be empty")
        window.location="login.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "Field cant be empty");
    }
    $loginpass = md5($loginpass);

    if (count($error) == 0) {
        $user = new user();
        $dbconnect = new Dbconnect();
        $row1 = $user->login($dbconnect->conn, $loginemail, $loginpass);

        if (isset($row1)) {
            foreach ($row1 as $key => $row) {
                $email = $row['email'];
                $name = $row['name'];
                $id = $row['id'];
                $admin = $row['is_admin'];
                $active = $row['active'];
                $email_approve=$row['email_approved'];
                $phone_approve=$row['phone_approved'];
            }

            if ($admin == 1) {
                $_SESSION['userdata'] = array(
                    'userid' => $id,
                    'username' => $email,
                    'name' => $name,
                );
                header('Location:admin/index.php');
            } elseif ($admin == 0 && $active == 1) {
                $_SESSION['userdata'] = array(
                    'userid' => $id,
                    'username' => $email,
                    'name' => $name,
                );
                header('Location:index.php');

            } elseif ($admin == 0 && $active == 0 && $email_approve==0 && $phone_approve==0) {
                $_SESSION['userdata'] = array(
                    'userid' => $id,
                    'username' => $email,
                    'name' => $name,
                );

                echo '<script>alert("Please Approve First")
            window.location="account.php"</script>';

            } elseif ($admin == 0 && $active == 0 && ($email_approve==1 || $phone_approve==1)) {
                $_SESSION['userdata'] = array(
                    'userid' => $id,
                    'username' => $email,
                    'name' => $name,
                );

                echo '<script>alert("Admin has block you")
            window.location="account.php"</script>';

            }

            
        } else {

            echo '<script>alert("Please Register First")
        window.location="account.php"</script>';
        }
    }

}


if (isset($_POST['submit3'])) {

    $email1=$_SESSION['email'];

    $otp1=isset($_POST['email2']) ? $_POST['email2'] : "";

    $otp=$_SESSION['otp'];
    echo $email1;
    echo $otp1;
    echo $otp;

    
 

    if ($otp1==$otp) {

        echo "ab";

        $user = new user();
        $dbconnect = new Dbconnect();
        $row1 = $user->verifyemailuser($dbconnect->conn, $email1);
    }

 





}


if (isset($_POST['submit4'])) {

    $mobile1=$_SESSION['mobile'];

    $otp1=isset($_POST['mobile2']) ? $_POST['mobile2'] : "";

    $otp=$_SESSION['otp1'];

 

    if ($otp1==$otp) {

        $user = new user();
        $dbconnect = new Dbconnect();
        $row1 = $user->verifymobileuser($dbconnect->conn, $mobile1);
    } else {
        echo '<script>alert("Please enter valid otp");
            window.location="validation.php"</script>';
    }

 





}
