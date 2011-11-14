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
			<!--
<div id="contentPic">
				<ul class="picSpace">
				<li><a href=""><img src="imgs/chunlipowerfoil.jpg" width="145px" height="163px"/></a>
				</li>
				<li>
				<a href=""><img src="imgs/chunlipowerfoil.jpg" width="145px" height="163px"/></a>
				</li>
				</ul>
			
			
			</div>	
-->	
<p> welcome<?php echo $this->session->userdata('username');?><span>  <?php echo anchor('thumb/logout','logout') ?></p>
<?php echo anchor('upload','upload an image') ?>



		<div id="picholder">
			<div class="List">
				<div class="gutter">
					<a href=""><img src="<?php echo base_url()?>uploads/chun3.jpg" width="145px" height="163px"/></a>
				</div>
				<div class="gutter">
					<a href=""><img src="imgs/chunlipowerfoil.jpg" width="145px" height="163px"/></a>
				</div>
			</div><!-- close list	 -->
			
		</div><!-- closepichold -->
	
		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>