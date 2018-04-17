<?php $this->load->view('header.php');?>
		<!-- jQuery -->
<?php echo form_open_multipart('Home/simpan'); ?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-6">
			<form role="form">
					<label>Id</label>
						<input class="form-control" type="text" name="id" placeholder="ID" required="required">

					<label>Author</label>
						<input class="form-control" type="text" name="author" placeholder="author" required="required">

					<label>Date</label>
						<input type="Date" class="form-control" name="date" placeholder="date" required="required">

					<label>Tittle</label>
						<input type="text" class="form-control" type="text" name="tittle" placeholder="tittle" required="required">

					<label>Content</label>
						<textarea class="form-control" rows="3" name="content" placeholder="Content" required="required"></textarea>

					<label>Image File</label>
						<input type="file" name="image_file" placeholder="Image File">
					<br><button href="<?php echo base_url('home/m_blog');?>" type="submit" class="btn btn-primary">Tambah Data</button>

