<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Data Penemuan</h4>
        </div>

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4> <i class="fa fa-book"></i> Daftar Penemuan Kendaraan</h4>
                </div>
                <div class="panel-body">
                <ul>
                            

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-book"></i> Daftar Temuan</h3>
        <div class="box-tools pull-right">
        
        </div><!-- /.box-tools -->

        </div><!-- /.box-header -->
        <div class="box-body">
        <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                </tr>
    <?php
        }
      ?>             
            </tbody>
        </table>
      </div>
    </div>