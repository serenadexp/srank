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
			
			
		<?php if($query) foreach($query as $row):?><!-- if database(query) exist(:) then run the loop -->
	
			
		<?php endforeach;?>
			
			
				
			<div id="content">
				<div id="seaHold">
					<div id="firstlvl">
					 <?php
						$data = array('id'=>$idS,'class'=>$classS,'value'=>$valueS);/* the search input */
						 echo form_input($data);
						 ?>
						<button id="seaBtn" class="sFont" type="submit">Search</button>
					</div><!-- closesfirstlvl-->
				<?php echo form_open('home/login'); ?>
	
					<div id="seclvl">
						<?php
						$data = array('id'=>$idU,'class'=>$class,'name'=>$nameU,'value'=>set_value('username'));/*these are the items we past in from the controller*/	
						echo form_input($data);
						 ?>
						 <span><?php form_error('username') ?></span>
						 <?php
						$data = array('id'=>$idP,'class'=>$class,'name'=>$nameP);/* the password input */
						 echo form_input($data);
						 ?>
						 
					<span><?php form_error('userPassword') ?></span>	 
						<button id="logBtn" class="lFont" type="submit">Login</button>
					</div><!-- closeseclvl -->
					<div id="notMem">
						<p class="memF">Not a member<?php echo anchor('login/signup','Join Here','class="join "');?></p>
					</div>
				</form>			

				</div><!-- closecold -->
			</div><!-- closecontent -->


		
		</div><!-- closewrapper -->
		
		
	</body>
</html>



