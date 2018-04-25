<?php $this->load->view('header.php');?>
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kategori/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama kategori</th>
                    <th>discription/th>
                    <th>date</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->cat_id;?></td>
                        <td><?php echo $row->cat_name;?></td>
                        <td><?php echo $row->cat_description;?></td>
                        <td><?php echo $row->date_created;?></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/kategori/edit/'.$row->cat_id);?>">edit</a>
                            <a  class="btn btn-danger" href="<?php echo base_url('index.php/kategori/hapuspproses/'.$row->cat_id);?>">delete</a>
                   </tr>
                </td>
            </div>
        <?php }?>
    </tbody>
    </tr>
    </tbody>
    </tr>
    </thead>
    </table>
    </div>
    </div>
    </body>
    </html>
</table>    
	