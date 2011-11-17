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
		<?php echo anchor('home','go back');?>
		 <?php
			$data = array('id'=>$idU,'class'=>$class,'name'=>$nameU);/* the password input */
			 echo form_input($data);
			?>
			<?php
			$data = array('id'=>$idP,'class'=>$class,'name'=>$nameP);/* the password input */
			 echo form_input($data);
			?>
				<button id="signBtn" class="lFont" type="submit">signup</button>

		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>