<?php $this->load->view('header.php');?>
		<!-- jQuery -->
				<div class="container">
			<div class="row">
		<?php foreach ($blog_load as $key) {
			$increment = 3;
				if($increment%3==0){ ?>
					<div class="container">
					<div class="row">
	    			<div class="col-sm-4">
		    
		<?php } ?>
					<div class="panel panel-primary">
		    	    	<div class="panel-heading"><?php echo $key['tittle']?></div>
		        		<?php $dirName = '/assets/path/';
		        		$fileName = $key["image_file"];
		        		$imageUrl = $dirName . $fileName; ?>
		        		<div class="panel-body"><img src="<?php echo base_url($imageUrl); ?>" class="img-responsive" style='width:100%; height: 200px' alt="Image"></div>
		        		<div class="panel-footer">Author : <?php echo $key['author'];?></div>
		        		<HR>
		        		<center>
		        			<form action="<?php echo site_url('Home/detail') ?>" method="post">
		        			<input type="hidden" name="id" value="<?php echo $key['id']?>">
		        			<button class="btn btn-level" style="margin-bottom: 10px;">DETAIL</button>
		        		</form>
		        			<form action="<?php echo site_url('Home/hapus') ?>" method="post">
		        			<input type="hidden" name="id" value="<?php echo $key['id']?>">
		        			<input type="hidden" name="image_file" value="<?php echo $key['image_file']?>">
		        			<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data ini?')" style="margin-bottom: 10px;">HAPUS</button>
		        		</form>
		        		</center>
		    		</div>
		    		</div>
				<?php $increment = $increment + 1;
			    if($increment%3==0){ ?>
		    		</div>
		    		</div>
			    	<br>
				<?php } 
				 ?>
			<?php } ?>
			</div>
			</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>