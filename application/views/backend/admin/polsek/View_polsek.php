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
                    <p>Anda akan menghapus Data Polsek  ini</p>
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
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Polsek</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <div class="btn-group"><a href="<?php echo base_url(); ?>admin/Polsek/create"  class="btn btn-success" role="button" data-toggle="tooltip" title="Tambah Polsek"><i class="fa fa-plus"></i>  Tambah Polsek</a></div>
   <div class="form-group"></div>
   <table id="table-buku" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Polsek</th>
                <th>Nama Polsek</th>
                <th>Alamat Polsek</th>
                <th>No. Telp Polsek</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>ID Polsek</th>
                <th>Nama Polsek</th>
                <th>Alamat Polsek</th>
                <th>No. Telp Polsek</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $no = 1;
        foreach($data_polsek->result_array() as $op)
        {
        ?>
            <tr>
               <td><?php echo $no++ ;?></td>
                <td><?php echo $op['id_polsek'];?></td>
                <td><?php echo $op['nama_polsek'];?></td>
                <td><?php echo $op['alamat_polsek'];?></td>
                <td><?php echo $op['no_telp_polsek'];?></td>
                <td>
                <?php echo 
                    '<a href="'.base_url().'admin/Polsek/edit_polsek/?id_polsek='.$op['id_polsek'].'" class="btn btn-warning" role="button" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                    <span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'admin/Polsek/hapus_polsek/?id_polsek='.$op['id_polsek'].'">
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