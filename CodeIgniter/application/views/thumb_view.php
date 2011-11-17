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
			<p class="remov"><?php echo anchor('http://localhost:8888/CodeIgniter/index.php/rss',img('img/rss.png'),'class="remov"');?></p>
	<div id="wrapper">
			

		<div id="container">

<p class="wel"> Welcome <?php 
if(!$all['username']){
redirect('home');/* if theres no username redirect */
}else{echo $all['username'] ;}?><span>  <?php echo anchor('thumb/logout','logout' ,'class="join cresize"') ?></p>
<p class="up"><?php echo anchor('upload','Upload an image','class="join cresize"') ?></p>


<?php if($img) foreach($img as $row):?>

<?php endforeach;?>

		<div id="picholder">
			<div class="List">
			<?php if($img) foreach($img as $row):?>
				<div class="gutter">
					<?php $imgprop=array('width'=>'145','height'=>'163', 'src'=>base_url().$row->path);
echo anchor('pic?image='.$row->path,img($imgprop)) ; ?>					

				</div>
			<?php endforeach;?>	
			</div><!-- close list	 -->
			
		</div><!-- closepichold -->
	
		</div><!-- container -->
	</div><!-- closewrapper -->
		
		
	</body>
</html>