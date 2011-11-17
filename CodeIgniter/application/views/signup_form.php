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
		<?php echo form_open('login/create_member');?>
		<p><?php echo form_input('first_name',set_value('first_name','First Name') );?></p>
		<p>	 <?php echo form_input('last_name',set_value('first_name','Last Name') );?></p>
		<p>	 <?php echo form_input('email_address',set_value('email_address','Email Address') );?></p>
		<p>	 <?php echo form_input('username',set_value('username','Username') );?></p>
		<p>	 <?php echo form_input('password',set_value('password','Password') );?></p>
		<p>	 <?php echo form_input('password2',set_value('password2','Password Confirm'));?></p>
		<p>	 <?php echo form_submit('submit','Create Account');?></p>
			 
			 <?php echo validation_errors('<p class=err>') ?>
			 </form>
		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>