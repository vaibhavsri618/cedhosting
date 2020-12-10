<?php



session_start();
if (isset($_SESSION)) {
    $email=$_SESSION['email'];
    $name=$_SESSION['name'];
    $mobile=$_SESSION['mobile'];


   

}

?>



<div id="validmobile">

<?php

if (isset($_POST['mobile'])) {



        $otp1 = rand(1000, 9999);
        $_SESSION['otp1'] = $otp1;

        $fields = array(
            "sender_id" => "FSTSMS",
            "message" => "Hello ".$name." your otp is - ".$otp1."",
            "language" => "english",
            "route" => "p",
            "numbers" => $mobile
        );
        
        $curl = curl_init();
        
            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($fields),
            CURLOPT_HTTPHEADER => array(
            "authorization: TvcZmyoFijfAeXuqNGJ9lpURtnC4kgQ1shVBr8SOK2PDaMwzL0Crs0VYmiQ1LS2lqjPD9nvOGfFTuX8K",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
            ),
            )
            );

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }

      }

    

    ?>
        </div> 
       