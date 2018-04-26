<?php $this->load->view('header.php');?>
		<!-- jQuery -->
<form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kategori/hapusproses/'.$data['cat_id']);?>" onsubmit="return cekform();">
<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-6">
			<form role="form">
					<label>Kategori Id</label>
						<input class="form-control" type="text" name="cat_id" placeholder="ID kategori" value="<?php echo $data['cat_id'];?>" required disabled>

					<label>nama kategori</label>
						<input class="form-control" type="text" name="cat_name" placeholder="Nama Kategori" value="<?php echo $data['cat_name'];?>" required disabled>

					<label>Diskripsi</label>
						<input type="text" class="form-control" name="cat_description" placeholder="diskripsi" value="<?php echo $data['cat_description'];?>" required disabled>

					<label>Date</label>
						<input type="date" class="form-control" type="text" name="date_created" placeholder="tanggal" value="<?php echo $data['date_created'];?>" required disabled>

					<br><button href="<?php echo base_url('kategori/m_kategori');?>" type="submit" class="btn btn-danger">Hapus</button>
