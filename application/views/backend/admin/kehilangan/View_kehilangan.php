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
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Kehilangan</h3>
    <div class="box-tools pull-right">
    
    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
   <div class="box-body">
   <!-- <div class="btn-group"><a href="<?php echo base_url(); ?>admin/Temuan/create"  class="btn btn-success" role="button" data-toggle="tooltip" title="Tambah Penemuan"><i class="fa fa-plus"></i>  Tambah Keh8ilangan</a></div>
   <div class="form-group"></div> -->
   <table id="table-buku" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Surat Kehilangan</th>
                <th>Polsek Terkait</th>
                <th>ID Pendaftaran</th>
                <th>Nama Pelapor</th>
                <th>No. Polisi</th>
                <th>No. Rangka</th>
                <th>No. Mesin</th>
                <th>Melapor Pada</th>
                <th>Lampiran SIM</th>
                <th>Lampiran STNK</th>
                <th>Merk Kendaraan</th>
                <th>Warna Kendaraan</th>
                <th>Tanggal Hilang</th>
                <th>Deskripsi</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>No. Surat Kehilangan</th>
                <th>Polsek Terkait</th>
                <th>ID Pendaftaran</th>
                <th>Nama Pelapor</th>
                <th>No. Polisi</th>
                <th>No. Rangka</th>
                <th>No. Mesin</th>
                <th>Melapor Pada</th>
                <th>Lampiran SIM</th>
                <th>Lampiran STNK</th>
                <th>Merk Kendaraan</th>
                <th>Warna Kendaraan</th>
                <th>Tanggal Hilang</th>
                <th>Deskripsi</th>
                <th>Pilihan</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $no = 1;
        foreach($data_kehilangan->result_array() as $op)
        {
        ?>
            <tr>
               <td><?php echo $no++ ;?></td>
                <td><?php echo $op['no_surat_kehilangan'];?></td>
                <td><?php $kehilangan=$op['id_polsek'];
                    foreach ($polsek -> result_array() as $op2) {
                        if ($op2['id_polsek']==$kehilangan){
                            echo $op2['nama_polsek'];
                        }
                    }
                ?></td>
                <td><?php echo $op['id_pendaftaran'];?></td>
                <td><?php $kehilangan=$op['id_pendaftaran'];
                    foreach ($data_pendaftaran -> result_array() as $op2) {
                        if ($op2['id_pendaftaran']==$kehilangan){
                            echo $op2['nama_lengkap'];
                        }
                    }
                ?></td>
                <td><?php echo $op['no_polisi'];?></td>
                <td><?php echo $op['no_rangka'];?></td>
                <td><?php echo $op['no_mesin'];?></td>
                <td><?php echo $op['melapor_pada'];?></td>
                <td><?php echo $op['lampiran_sim'];?></td>
                <td><?php echo $op['lampiran_stnk'];?></td>
                <td><?php echo $op['merk_kendaraan'];?></td>
                <td><?php echo $op['warna_kendaraan'];?></td>
                <td><?php echo $op['tgl_hilang'];?></td>
                <td><?php echo $op['deskripsi'];?></td>
                <td>
                <?php echo 
                    '<span data-toggle="modal" data-target="#confirm-delete" data-href="'.base_url().'admin/Laporkehilangan/hapus_kehilangan/?no_surat_kehilangan='.$op['no_surat_kehilangan'].'">
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
