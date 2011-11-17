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
<?php echo $error;?>
	<?php echo form_open_multipart('upload/do_upload');?>
	<input type="file" name="userfile"/><input type="submit" value="upload"/>
	<?php echo anchor('thumb','return to images Page') ?>
		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>