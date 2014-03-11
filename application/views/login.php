<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>99yrs</title>
			 <?php 
				$this->load->helper('html');	
			 	echo link_tag('css/style.css'); 
			 ?>	
	</head>
	<body>
		<div id="wapper">
			<!--<div id="wrapper_header">-->
    		<div class="header">
        <div class="logo_box"> <?php echo img('images/logo.png','208','95');?>
        </div>
       </div>
			 <!------HEADER END------------->

		<div class="blankshell">
			<div class="area">
				
				<!-- Begin Page Content -->
				
    		<div id="container">
    			
        	<form method="post" action="login/userlogin" name="loginform">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
          <?php if($data['error']):?>
          	<div class="error">Invalid username or password</div>
          <?php endif;?>
            <div id="lower">
                <input type="checkbox"><label class="check" id="keep_logged_in" for="checkbox">Keep me logged in</label>
                <input type="submit" value="Login" name="submit" class="login_submit">
            </div><!--/ lower-->
        	</form>
    		</div><!--/ container-->
    			<!-- End Page Content -->
			</div>
		</div>
		</div>
	</body>
</html>







<!--  Old Html
<!DOCTYPE html>
<html>
	<head>
		<title>
			Login Page
		</title>

	</head>
	<body>
		<form method="post" action="" name="loginform">
			User Name:<input type="text" placeholder="User name" name="username"></br>
			Password:<input type="password" name="password">
			<input type="submit" name="submit" value="submit">
		</form>
	</body>	
</html>
-->
