<?php $this->load->view('header.php');?>
	<div class="container" style="margin-top: 20px;">
			<div class="row">
	    		<div class="col-sm-12">
		    		<div class="panel panel-primary">
		        		<div class="panel-heading"><?php echo $naruto->tittle; ?></div>
				        <div class="panel-body">
							<?php 
								$dirName = '/assets/path/';
		        				$fileName = $naruto->image_file;
		        				$imageUrl = $dirName . $fileName; 
		        			?>
				        	<img src="<?php echo base_url($imageUrl) ?>" class="img-responsive" style='width:1920px; height: 750px' alt="Image">
				        </div>
				        <div class="panel-footer"><?php echo $naruto->author; ?></div>
				        <div class="panel-footer"><?php echo $naruto->content; ?></div>
				        <div class="panel-footer"><?php echo $naruto->cat_name; ?></div>
				        <div class="panel-footer"><?php echo $naruto->cat_description; ?></div>
		      		</div>
		    	</div>
			</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>