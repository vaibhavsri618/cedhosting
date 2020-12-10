
<?php

require 'header.php';
require 'classes/Dbconnect.php';
require 'classes/user.php';



?><!---header--->
<!---login--->
<div class="content">
<!-- registration -->
<div class="main-1">
<div class="container">
<div class="register">
<div class="register-but">
<form action="miduser.php" method="post" onsubmit="return validate()"> 
<div class="register-top-grid">
<h3>personal information</h3>
<div>
<span>Name<label>*</label></span>
<input type="text" name="name" id="name" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*$" required> 
</div>
<div>
<span>Mobile Number<label>*</label></span>
<input type="text" name="mobile" id="mobile" required> 
</div>
<div>
<span>Email Address<label>*</label></span>
<input type="email" name="email" id="email" required> 
</div>
<div class="clearfix"> </div>
<a class="news-letter" href="#">
</a>
</div>
<div class="register-bottom-grid">
<h3>login information</h3>
<div>
<span>Password<label>*</label></span>
<input type="password" id="pass" name="password" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
</div>
<div>
<span>Confirm Password<label>*</label></span>
<input type="password" id="repass" name="repassword" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
</div>
</div>
<div class="clearfix"> </div>
<a class="news-letter" href="#"></a>
<div class="register-top-grid">
<h3>Security information</h3>
<div>
<span>Security Answer<label>*</label></span>
<select name="ques">Security Question*</label>
<option>Select a Security question</option>
<option>What was your childhood nickname?</option>
<option>What is the name of your favourite childhood friend?</option>
<option>What was your favourite place to visit as a child?</option>
<option>What was your dream job as a child?</option>
<option>What is your favourite teacher's nickname?</option></select>
</div>
<div>
<span>Security Answer<label>*</label></span>
<input type="text" name="ans" id="ans" required>
</div>
</div>


<div class="clearfix"> </div>


<input type="submit" value="submit" name="submit1">
<div class="clearfix"> </div>
</form>
</div>
</div>
</div>
</div>
<!-- registration -->

</div>

<script>

function validate() {

var pass=$("#pass").val();
var repass=$("#repass").val();
if(pass!=repass)
{
alert('Password not matched');
$('#pass').val("");
$("#repass").val("");
return false;
} else
{
return true;
}



if (Number.isInteger(parseInt($('#ans').val()))) {
alert('Enter Security Answer in Correct Fornat');
$('#ans').val("");
return false;
}
else {
return true;
}




}
</script>
<!-- login -->
<!---footer--->

<?php

require 'footer.php';
?>
<!---footer--->
</body>
</html>