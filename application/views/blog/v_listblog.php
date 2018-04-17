<?php $this->load->view('header.php');?>
<body>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/home/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>author</th>
                    <th>date/th>
                    <th>tittle</th>
                    <th>image file</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->author;?></td>
                        <td><?php echo $row->date;?></td>
                        <td><?php echo $row->tittle;?></td>
                        <td><?php echo $row->image_file;?></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/home/edit/'.$row->id);?>">edit</a>
                            <a  class="btn btn-danger" href="<?php echo base_url('index.php/home/hapuspproses/'.$row->id);?>">delete</a>
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