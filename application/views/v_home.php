<?php $this->load->view('header.php');?>
	<div id="container">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="table-responsive">
	<h1>Biodata Saya dari array</h1>
		<table class="table table-hover">
		<tbody>
			<?php foreach ($biodatabuilder_array as $key){?>
			<tr>
				<td><?php echo $key['nama']?></td>
			</tr>
				<td><?php echo $key['nim']?></td>
			</tr>
			<tr>
				<td><?php echo $key['alamat']?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="table-responsive">
	<h1>Biodata Saya Dari Object</h1>
		<table class="table table-hover">
		<tbody>
		<?php foreach ($biodatabuilder_object as $key) {?>
		<tr>
			<td><?php echo $key->nama ?></td>
		</tr>
		<tr>
			<td><?php echo $key->nim ?></td>
		</tr>
		<tr>
			<td><?php echo $key->alamat?></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="table-responsive">
	<h1>Biodata Saya dari query builder array</h1>
		<table class="table table-hover">
		<tbody>
			<?php foreach ($biodata_array as $key){?>
			<tr>
				<td><?php echo $key['nama']?></td>
			</tr>
				<td><?php echo $key['nim']?></td>
			</tr>
			<tr>
				<td><?php echo $key['alamat']?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="table-responsive">
	<h1>Biodata Saya Dari Query Builder Object</h1>
		<table class="table table-hover">
		<tbody>
		<?php foreach ($biodata_object as $key) {?>
		<tr>
			<td><?php echo $key->nama ?></td>
		</tr>
		<tr>
			<td><?php echo $key->nim ?></td>
		</tr>
		<tr>
			<td><?php echo $key->alamat?></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
</div>
</body>
</html>