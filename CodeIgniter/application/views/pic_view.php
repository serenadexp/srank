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
			

			<div id="container2">
				<div id="contentPic">
					<div id="comments">
					<p class="wel"> Welcome <?php 
if(!$al['username']){
redirect('home');/* if theres no username redirect */
}else{echo $al['username'] ;}?><span><?php echo anchor('thumb/logout','logout','class="join cresize"') ?></p>
											
						<p id="picSp">
						<img src="<?php echo base_url().$_GET['image']?>"/></p>
						<p class="userComm"><?php  /* $piccomment */
						$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'height:20%',
              
            );echo form_textarea($data); ?><input type="submit" value="submit"/>
</p>
					</div><!-- closecomments -->
				</div><!-- closecontentpic -->		
				
			</div><!-- closecontainer -->

		
		</div><!-- closewrapper -->
		
		
	</body>
</html>