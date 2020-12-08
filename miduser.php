<?php


require 'classes/Dbconnect.php';
require 'classes/user.php';
session_start();



if(isset($_POST['submit1']))
{

    $error=array();

	$name=isset($_POST['name'])?$_POST['name']:"";
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";
	$email=isset($_POST['email'])?$_POST['email']:"";
	$password=isset($_POST['password'])?$_POST['password']:"";
	$repassword=isset($_POST['repassword'])?$_POST['repassword']:"";
	$ques=isset($_POST['ques'])?$_POST['ques']:"";
    $ans=isset($_POST['ans'])?$_POST['ans']:"";
 

    if($name=="" || $mobile=="" || $email=="" || $password=="" || $repassword=="" || $ques=="Select a Security question" || $ans=="")
    {
        echo '<script>alert("Field cant be empty")
        window.location="account.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "Field cant be empty");
    }
    $password=md5($password);

    if($password!=md5($repassword))
    {
        echo '<script>alert("Password not matched")
        window.location="account.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "Password not matched");
    }



	$user=new user();
	$dbconnect=new Dbconnect();
    $display=$user->seeuser($dbconnect->conn,$email);
    if($display=="")
    $display=0;

    if($display!=0)
    {
    echo '<script>alert("User already present")
    window.location="account.php"</script>';
    $error[] = array("id" => 'form', 'msg' => "User already present");
    } 
    
    
    
    if(count($error)==0)
    {
	
	$display=$user->registration($dbconnect->conn,$name,$mobile,$email,$password,$ques,$ans);
	
    }
	


}


if(isset($_POST['loginsubmit']))

{
    $email="";
    $name="";
    $userid="";
    $active;
    $admin;

    $error=array();


    $loginemail=isset($_POST['loginemail'])?$_POST['loginemail']:"";
    $loginpass=isset($_POST['loginpass'])?$_POST['loginpass']:"";
    
    if($loginemail=="" && $loginpass=="")
    {
        echo '<script>alert("Field cant be empty")
        window.location="login.php"</script>';
        $error[] = array("id" => 'form', 'msg' => "Field cant be empty");
    }
    $loginpass=md5($loginpass);

    if(count($error)==0)
    {
    $user=new user();
	$dbconnect=new Dbconnect();
    $row1=$user->login($dbconnect->conn,$loginemail,$loginpass);

    if(isset($row1))
    {
        foreach($row1 as $key=>$row)
        {
            $email=$row['email'];
            $name=$row['name'];
            $id=$row['id'];
            $admin=$row['is_admin'];
            $active=$row['active'];
        }

        if($admin==1)
        {
            $_SESSION['userdata'] = array(
                'userid' => $id,
                'username' => $email,
                'name' => $name
            );
            header('Location:index.php');
        }
        elseif($admin==0 && $active==1)
        {
            $_SESSION['userdata'] = array(
                'userid' => $id,
                'username' => $email,
                'name' => $name
            );
            header('Location:index.php');

        }

        elseif($admin==0 && $active==0)
        {
            $_SESSION['userdata'] = array(
                'userid' => $id,
                'username' => $email,
                'name' => $name
            );

            echo '<script>alert("Please Approve First")
            window.location="account.php"</script>';
          

        }
    }

    else
    {
      
        echo '<script>alert("Please Register First")
        window.location="account.php"</script>';  
    }
    }


}

?>