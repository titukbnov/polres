<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">

<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Data Kehilangan Kendaraan</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">
    <!--show error message here -->
    <div class="form-group"></div>
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>pelapor/Laporkehilangan" role="form">
		<div class="col-sm-12">
            <div class="form-group">
              <label for="nosurat">No. Surat Kehilangan</label>
              <input type="text" name="nosurat" class="form-control" placeholder="Nomor Surat Kehilangan" required="required">
            </div>
            <div class="form-group">
              <label for="idpolsek">ID Polsek</label>
              <select name="idpolsek" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
              <option value="">&nbsp;</option>
              <?php foreach ($id_polsek->result_array()as $op)
              {
                ?>
                <option value="<?php echo $op['id_polsek'];?>"><?php echo $op['nama_polsek'];?></option>
              <?php
              }
              ?>
              </select>
            </div>
            <div class="form-group">
              <label for="idpendaftaran">ID Pendaftaran</label>
              <select name="idpendaftaran" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
              <option value="">&nbsp;</option>
              <?php foreach ($id_pendaf->result_array()as $op)
              {
                ?>
                <option value="<?php echo $op['id_pendaftaran'];?>"><?php echo $op['nama_lengkap'];?></option>
              <?php
              }
              ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nopolisi">No Polisi</label>
              <input type="text" name="nopolisi" class="form-control" placeholder="Masukan Nomor Polisi" required="required">
            </div>
            <div class="form-group">
              <label for="norangka">No Rangka</label>
              <input type="text" name="norangka" class="form-control" placeholder="Masukan Nomor Rangka" required="required">
            </div>
            <div class="form-group">
              <label for="nomesin">No Mesin</label>
              <input type="text" name="nomesin" class="form-control" placeholder="Masukan Nomor Mesin" required="required">
            </div>
            <div class="form-group">
              <label for="laporpada">Melapor Pada</label>
              <input type="text" name="laporpada" class="form-control" placeholder="Melapor Pada ?" required="required">
            </div>
            <div class="form-group">
              <label for="lampiransim">Lampiran SIM</label>
              <input type="text" name="lampiransim" class="form-control" placeholder="Masukan Lampiran SIM" required="required">
            </div>
            <div class="form-group">
              <label for="lampiranstnk">Lampiran STNK</label>
              <input type="text" name="lampiranstnk" class="form-control" placeholder="Masukan Lampiran STNK" required="required">
            </div>
            <div class="form-group">
              <label for="merkkendaraan">Merk Kendaraan</label>
              <input type="text" name="merkkendaraan" class="form-control" placeholder="Masukan Merk Kendaraan" required="required">
            </div>
            <div class="form-group">
              <label for="warnakendaraan">Warna Kendaraan</label>
              <input type="text" name="warnakendaraan" class="form-control" placeholder="Masukan Warna Kendaraan" required="required">
            </div>
            <div class="form-group">
              <label for="tanggalhilang">Tanggal Hilang</label>
              <input data-provide="datepicker" class="bootstrap-datepicker" name="tanggalhilang">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="4" placeholder="Deskripsi" required="required"></textarea>
            </div>   
          	<div class="col-sm-4">
                 <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
				</div>
                <div class="btn-group">
                   <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Laporkan</button>
                </div>
            </div>
              <!-- /.box-footer -->
        </form>
  </div>
  <div class="box-footer">
  <td>
    <div align ="Right"> <a  href="<?php echo base_url(); ?>pelapor/Home"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    
  </div><!-- box-footer -->
</div><!-- /.box -->