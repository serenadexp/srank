<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>S-rank</title>
		
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  
  		
 		<link rel="stylesheet" href="<?php echo base_url()?>css/web.css" type="text/css" /> 

		</head>
		
		<body>
		<div id="header">
		
			<p><img src="<?php echo base_url()?>img/logo.png"/></p>
			</div><!-- closeheader -->
	<div id="wrapper">
			

		<div id="container">
			
			<?php echo form_open('login/validate_credentials');?>
			<?php echo form_input('username','Username' );?>
			<?php echo form_password('password',"Password");?>
			<?php echo form_submit('submit','Login');?>
			<p class="memF">Not a user <?php echo anchor('login/signup','Create Account','class="join cresize"')?></p>
			
			
	</form>
		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>