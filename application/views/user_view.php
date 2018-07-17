<table class="table table-striped table-bordered data" >
 					<thead>
 						<tr>			
 							<th>Id user</th>
 							<th>Nama </th>
                             <th>Kodepos </th>
                             <th>Email </th>
                             <th>Username </th>
                             <th>Password </th>                            
                             <th>Registration</th>
                             <th>Level</th>                   
 							<th style="text-align: center;">Edit</font></th>
 							<th style="text-align: center;">Delete</font></th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php foreach ($dataUser as $key) {?>
 						<tr>				
 							<td><?php echo $key['user_id']; ?></td>
 							<td><?php echo $key['nama']; ?></td>
 							<td><?php echo $key['kodepos']; ?></td>
                             <td><?php echo $key['email']; ?></td>
                             <td><?php echo $key['username']; ?></td>
                             <td><?php echo $key['password']; ?></td>
                             <td><?php echo $key['register_date']; ?></td>
                             <td><?php echo $key['level']; ?></td>
 							<td>
 								<form action="<?php echo base_url('index.php/user/toedituser')?>" method="post">
 									<input type="hidden" name= "edit" class="form-control" value="<?php echo $key['user_id']; ?>">
 									<button class="btn btn-warning">Edit</button>
 								</form>
 							</td>
 							<td>
 								<form action="<?php echo base_url('index.php/user/deleteuser')?>" method="post">
 									<input type="hidden" name= "delete" class="form-control" value="<?php echo $key['user_id']; ?>">
 									<input type="hidden" name= "nama" class="form-control" value="<?php echo $key['nama']; ?>">
 									<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus kategori <?php echo $key['nama']?> ?')">Delete</button>
 								</form>
 							</td>
 						</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>
 
 <script>
 $(document).ready( function () {
     $('.data').DataTable({
         dom: 'Bfrtip',
         buttons: [
             'copy', 'csv', 'excel', 'pdf', 'print'
         ]
     });
 } );
 </script> 