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
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Temuan</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <div class="btn-group"><a href="<?php echo base_url(); ?>admin/Temuan/create"  class="btn btn-success" role="button" data-toggle="tooltip" title="Tambah Penemuan"><i class="fa fa-plus"></i>  Tambah Penemuan</a></div>
   <div class="form-group"></div>
   <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Penemuan</th>
                <th>No. Surat Kehilangan</th>
                <th>Tgl Temuan</th>
                <th>Lokasi Temuan</th>
                <th>Temuan Polres</th>
                <th>Temuan Polsek</th>
                <th>Status</th>
                <th>Deskripsi</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>ID Penemuan</th>
                <th>No. Surat Kehilangan</th>
                <th>Tgl Temuan</th>
                <th>Lokasi Temuan</th>
                <th>Temuan Polres</th>
                <th>Temuan Polsek</th>
                <th>Status</th>
                <th>Deskripsi</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $no = 1;
        foreach($data_temuan->result_array() as $op)
        {
        ?>
            <tr>
               <td><?php echo $no++ ;?></td>
                <td><?php echo $op['id_penemuan'];?></td>
                <td><?php echo $op['no_surat_kehilangan'];?></td>
                <td><?php echo $op['tgl_temuan'];?></td>
                <td><?php echo $op['lokasi_temuan'];?></td>
                <td><?php echo $op['temuan_polres'];?></td>
                <td><?php echo $op['temuan_polsek'];?></td>
                <td><?php echo $op['status'];?></td>
                <td><?php echo $op['deskripsi'];?></td>
                <td>
                <?php echo 
                    '<a href="'.base_url().'admin/Temuan/edit_temuan/?id_penemuan='.$op['id_penemuan'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                    <span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'admin/Temuan/hapus_temuan/?id_penemuan='.$op['id_penemuan'].'">
                    <a class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                    </span>
                </td>
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
