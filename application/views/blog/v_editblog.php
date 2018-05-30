<?php $this->load->view('header.php');?>
		<!-- jQuery -->
<?php echo form_open_multipart('Home/edit'); ?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-6">
			<!-- <form role="form"> -->
					<label>Id</label>
						<input class="form-control" type="text" name="id" placeholder="ID" value="<?php echo $key->id ?>" required disable>

					<label>Author</label>
						<input class="form-control" type="text" name="author" placeholder="author" value="<?php echo $key->author ?>" required="required">

					<label>Date</label>
						<input type="Date" class="form-control" name="date" placeholder="date" value="<?php echo $key->date ?>" required>

					<label>Tittle</label>
						<input type="text" class="form-control" type="text" name="tittle" placeholder="tittle" value="<?php echo $key->tittle ?>" required>

					<label>Content</label>
						<textarea class="form-control" rows="3" name="content" placeholder="Content" value="<?php echo $key->content ?>" required></textarea>

					<label>Image File</label>
						<input type="file" name="image_file" value="<?php echo $key->image_file ?>" placeholder="Image File">
					<br><button href="<?php echo base_url('home/m_blog');?>" type="submit" class="btn btn-primary">Edit Data</button>
				</form>

