<?php

class user
{

    public function registration($conn, $name, $mobile, $email, $password, $ques, $ans)
    {

        $sql = "INSERT INTO `tbl_user`(`email`, `name`, `mobile`, `email_approved`,
        `phone_approved`, `active`, `is_admin`,
        `password`, `security_question`, `security_answer`)
VALUES ('" . $email . "','" . $name . "','" . $mobile . "',0,0,0,0,'" . $password . "','" . $ques . "','" . $ans . "')";

        if ($conn->query($sql) === true) {
            echo '<script>alert("Registration done succesfully,Please Validate your account to continue");
    window.location="validation.php"</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function seeuser($conn, $email)
    {
        $sql1 = "SELECT * FROM tbl_user WHERE `email`='" . $email . "'";
        $result1 = $conn->query($sql1);
        $count;

        $count = $result1->num_rows;
        return $count;

    }

    public function login($conn, $email,$pass)
    {

        $row1=array();

        $sql = "SELECT * FROM tbl_user WHERE `email`='".$email."'
         AND `password`='".$pass."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
                array_push($row1, $row);
            }
            return $row1;
        } else {
            echo "0 results";
        }
    }

    public function verifyemailuser($conn, $email1) 
    {

        $sql = "UPDATE tbl_user SET active=1 , email_approved=1  
        WHERE `email`='".$email1."'";

        if ($conn->query($sql) === true) {
            unset($_SESSION['email']);
            unset($_SESSION['mobile']);
            unset($_SESSION['otp']);
            echo '<script>alert("Validation done successfully please login to proceed");
                    window.location="login.php"</script>';

                   
        } else {
            echo '<script>alert("Please enter valid otp");
            window.location="validation.php"</script>';
        }


    }

    public function verifymobileuser($conn, $mobile1) 
    {

        $sql = "UPDATE tbl_user SET active=1 , phone_approved=1 
        WHERE `mobile`='".$mobile1."'";

        if ($conn->query($sql) === true) {
            echo '<script>alert("Validation done successfully please login to proceed");
                    window.location="login.php"</script>';
        } else {
            echo '<script>alert("Please enter valid otp");
            window.location="validation.php"</script>';
        }


    }

    function catpage($id,$conn)
    {
        $sql = "SELECT * FROM tbl_product WHERE id='".$id."'";
        $result = $conn->query($sql);
        $row1=array();
        if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {

            array_push($row1,$row);
        }
        return $row1;
        } 
    }

}
