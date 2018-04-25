<?php $this->load->view('header.php');?>
		<!-- jQuery -->
<?php echo form_open_multipart('kategori/simpan'); ?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-6">
			<form role="form">
					<label>Kategori Id</label>
						<input class="form-control" type="text" name="cat_id" placeholder="Cat_ID" required="required">

					<label>nama kategori</label>
						<input class="form-control" type="text" name="cat_name" placeholder="cat_name" required="required">

					<label>Diskripsi</label>
						<input type="text" class="form-control" name="cat_description" placeholder="deskripsi" required="required">

					<label>Date</label>
						<input type="date" class="form-control" type="text" name="date_created" placeholder="cat_date" required="required">

					<br><button href="<?php echo base_url('kategori/m_kategori');?>" type="submit" class="btn btn-primary">Tambah Data</button>

