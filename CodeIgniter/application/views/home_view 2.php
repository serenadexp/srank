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
		<p><img src="<?php echo $query ?>"/> </p>
			
			
			
			
			<div id="content">
				<div id="seaHold">
					<div id="firstlvl">
						<input id="roundS" class="hFont" type="text" value="search"> 											<button id="seaBtn" class="sFont" type="submit">Search</button>
					</div><!-- closesfirstlvl-->
					<div id="seclvl">
						<input id="user" class="login" type="text" value="Username"> 
						<input id="pass" class="login" type="text" value="Password"> 
						<button id="logBtn" class="lFont" type="submit">Login</button>

					</div><!-- closeseclvl -->
					<div id="notMem">
						<p class="memF">Not a member<?php echo anchor('pic','Join Here');?></p>
					</div>
						
				</div>
			</div><!-- closecontent -->

		
		</div><!-- closewrapper -->
		
		
	</body>
</html>



