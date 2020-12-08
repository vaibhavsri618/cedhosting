
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
		  	  <form action="miduser.php" method="post"> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" name="name" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*$" require> 
					 </div>
					 <div>
						<span>Mobile Number<label>*</label></span>
						<input type="text" name="mobile" id="mobile"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="email" name="email"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" name="password" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="repassword" minlength="8" maxlength="16" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
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
								<input type="text" name="ans" id="ans"  pattern="^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+[a-zA-Z]+$" require>
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
<!-- login -->
				<!---footer--->

				<?php

					require 'footer.php';
				?>
				<!---footer--->
</body>
</html>