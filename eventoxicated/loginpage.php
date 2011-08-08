<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>  
<head>  
	<link rel="icon" type="image/ico" href="images/favicon.ico"></link> 
	<link rel="stylesheet" type="text/css" href="layout.css" />
<script type="text/javascript" src="jquery-1.6.2.min.js"></script> 
<script type="text/javascript" src = "tabmenu.js"></script>
    <title>My Event Page</title>  
</head>  
<body>


 <div id="modal">
	

	<section id="main">
		<h2><strong>Event</strong>oxicated
			</h2>	
    	<form name = "loginForm" class = "formslogin" method = "POST" action = "processUser.php">
            
        		<legend></legend>
                <label for = "username">Username: <small>Dont have an account? <a href="register.php" tabindex="999">Sign up</a> for free!</small></label>
                <input type = "text" name = "user" id = "inputForms"/><br />
                <label for = "password">Password: <small><a href="register.php" tabindex="999">Forgot your password? </a></small></label>
                <input type = "password" name = "pass" id = "inputForms"/><br />
                <input type = "submit" name = "submit" value = "Sign in" />
            
		</form>
    </section>	
	<footer id="footer">
	        <div class="pie-clearfix wrapper">
	          <nav>
	            <ul class="pie-clearfix">
	              <li><a href="http://getcloudapp.com/download/">Application</a></li>
	              <li><a href="http://store.getcloudapp.com/">About Us</a></li>
	              <li><a href="http://help.getcloud.me/">Help</a></li>
	            </ul>
	          </nav>
<strong></strong>
	          <p>
	            &copy;2011 ComE 519 - Eventoxicated
	          </p>
	        </div>
	      </footer>
<div>
</body>
</html>