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
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>admin/Anggota/create" role="form">
		<div class="col-sm-12">
            <div class="form-group">
              <label for="nosurat">No. Surat Kehilangan</label>
              <input type="text" id="nosurat" class="form-control" placeholder="Nomor Surat Kehilangan">
            </div>
            <div class="form-group">
              <label for="idpolsek">ID Polsek</label>
              <select class="form-control">
                <option>-- Pilih Polsek --</option>
                <option>Polsek 1</option>
                <option>Polsek 2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="idpendaftaran">ID Pendaftaran</label>
              <select class="form-control">
                <option>-- ID Pendaftaran Anda --</option>
                <option>ID Pendaftaran 1</option>
                <option>ID Pendaftaran 2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nopolisi">No Polisi</label>
              <input type="text" id="nopolisi" class="form-control" placeholder="Masukan Nomor Polisi">
            </div>
            <div class="form-group">
              <label for="norangka">No Rangka</label>
              <input type="text" id="norangka" class="form-control" placeholder="Masukan Nomor Rangka">
            </div>
            <div class="form-group">
              <label for="nomesin">No Mesin</label>
              <input type="text" id="nomesin" class="form-control" placeholder="Masukan Nomor Mesin">
            </div>
            <div class="form-group">
              <label for="laporpada">Melapor Pada</label>
              <input type="text" id="laporpada" class="form-control" placeholder="Melapor Pada ?">
            </div>
            <div class="form-group">
              <label for="lampiransim">Lampiran SIM</label>
              <input type="text" id="lampiransim" class="form-control" placeholder="Masukan Lampiran SIM">
            </div>
            <div class="form-group">
              <label for="lampiranstnk">Lampiran STNK</label>
              <input type="text" id="lampiranstnk" class="form-control" placeholder="Masukan Lampiran STNK">
            </div>
            <div class="form-group">
              <label for="merkkendaraan">Merk Kendaraan</label>
              <input type="text" id="merkkendaraan" class="form-control" placeholder="Masukan Merk Kendaraan">
            </div>
            <div class="form-group">
              <label for="warnakendaraan">Warna Kendaraan</label>
              <input type="text" id="warnakendaraan" class="form-control" placeholder="Masukan Warna Kendaraan">
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
    <div align ="Right"> <a  href="<?php echo base_url(); ?>admin/Home"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    
  </div><!-- box-footer -->
</div><!-- /.box -->