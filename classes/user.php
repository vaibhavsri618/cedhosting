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
            echo '<script>alert("Registration done succesfully");
    window.location="login.php"</script>';
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

        $sql = "SELECT * FROM tbl_user WHERE `email`='".$email."' AND `password`='".$pass."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
                array_push($row1,$row);
            }
            return $row1;
        } else {
            echo "0 results";
        }
    }

}
