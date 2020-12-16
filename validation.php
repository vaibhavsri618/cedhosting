<?php






require 'header.php';

if(isset($_SESSION['email']) && isset($_SESSION['mobile']))
{




?>

<div class="main-1">
    <div class="container">
        <div class="register">
            <div class="register-but">
            
                <div class="register-top-grid">
                <h3>Please Verify Your Account</h3>
                <form action="miduser.php" method="post">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                        <span>Email <label> - </label>

                        
                        <label name="email1" id="email1">
                        
                        <?php 
                        if (isset($_SESSION['email'])) {
                            echo $_SESSION['email']; 
                        }?></label></span>
                             <div class="clearfix"> </div>

                             <input type="hidden" name="hidden" 
                        id="hidden" value="<?php 
                        if (isset($_SESSION['email'])) {
                            echo $_SESSION['email']; 
                        }?>">

                        <input type="text" name="email2" 
                        id="email2" placeholder="otp goes here"><br>
                        
                        <a id="verifyemail" 
                        class="btn btn-success">Verify Email</a><br>

                        <p id="show"></p>
                       

                        <input type="submit" class="ml-auto" value="Verify"
                         name="submit3" id="submit3">

                         <a 
                         id="resendemail" style="margin-left:250px"
                        class="btn btn-success">Resend Code</a>
                    </div>
                    </form>



                    <form action="miduser.php" method="post">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                        <span>Mobile Number <label> - </label>

                        <label name="name" id="mobile1">
                        <?php 
                        if (isset($_SESSION['mobile'])) {
                            echo $_SESSION['mobile']; 
                        }?></label></span>
                        
                             <div class="clearfix"> </div>

                             <input type="hidden" name="hidden" 
                        id="hidden" value="<?php 
                        if (isset($_SESSION['mobile'])) {
                            echo $_SESSION['mobile']; 
                        }?>">


                        <input type="text" name="mobile2" id="mobile2"
                         placeholder="otp goes here"><br>

                         <p id="show1"></p>
                        
                        <a id="verifymobile" class="btn btn-success verifymobile">
                        Verify mobile</a><br>

                        

                        <input type="submit" value="Verify" 
                        name="submit4" id="submit4">

                        <a style="margin-left:250px" id="resendmobile"
                        class="btn btn-success verifymobile">Resend Code</a>

                    </div>
                    </form>
                <div>
        </div>
        <div class="clearfix"> </div>


       
        <div class="clearfix"> </div>
       
        </div>
        </div>
        </div>
        </div>

        
        

       <div class="clearfix"> </div>

        <?php
        require 'footer.php';
                    }
                    else
                    echo"<script>alert('Cant go back')
                    window.location='index.php'</script>"

?>