<!--css khusus halaman ini -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">


<!--modal dialog untuk hapus -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus</h4>
                </div>
            
                <div class="modal-body">
                    <p>Anda akan menghapus Data Anggota  ini</p>
                    <p><strong>Peringatan</strong>  Setelah data dihapus, data tidak dapat dikembalikan!</p>
                    <br />
                    <p>Ingin melanjutkan menghapus?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Pelapor</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <table id="table-buku" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pendaftaran</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Jenis KElamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Status</th>
                <th>Pilihan</th>
                <th>No</th>
                <th>ID Pendaftaran</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<th>No</th>
				<th>ID Pendataran</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Jenis KElamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Status</th>	
                <th>Pilihan</th>
                <th>No</th>
                <th>ID Pendaftaran</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $no = 1;
        foreach($data_pelapor->result_array() as $op)
        {
        ?>
            <tr>
               <td><?php echo $no++ ;?></td>
                <td><?php echo $op['id_pendaftaran'];?></td>
                <td><?php echo $op['nik'];?></td>
                <td><?php echo $op['nama_lengkap'];?></td>
                <td><?php echo $op['username'];?></td>
                <td><?php echo $op['jenis_kelamin'];?></td>
                <td><?php echo $op['alamat'];?></td>
                <td><?php echo $op['email'];?></td>
                <td><?php echo $op['no_hp'];?></td>
                <td><?php echo $op['stts'];?></td>
                <td>
                <?php echo 
                    '<span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'admin/Pelapor/hapus_pelapor/?id_pendaftaran='.$op['id_pendaftaran'].'">
                    <a class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                    </span>
                </td>
                <td>No</td>
                <td>ID Pendaftaran</td>
                <td>NIK</td>
                <td>Nama Lengkap</td>
                <td>Username</td>
            </tr>';?>
<?php
    }
  ?>             
        </tbody>
    </table>
  </div>
  <div class="box-footer">
  </div><!-- box-footer -->
</div><!-- /.box -->