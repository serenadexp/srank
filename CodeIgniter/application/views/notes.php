$this->pic();/* to call a function u must use $this-> */

<php echo base_url()?>is used for when you want to target an item above a lvl like java

http://codeigniter.com/user_guide/database/active_record.html    tells you how to query the database


				
		<img src="<?php echo base_url()?><?php echo $query ?>"/> </p>
			
			
			
				
		<?php foreach($query as $row):?><!-- if database(query) exist(:) then run the loop -->
				<p><img src="<?php echo base_url()?><?php echo $row->path ?>"/></p>
		<?php endforeach;?>
