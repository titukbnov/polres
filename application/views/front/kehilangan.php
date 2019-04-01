<section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Pendaftaran Anda</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>pelapor/Datapendaftaran/tambah_data" role="form">
          <div class="col-sm-8 col-sm-offset-2 col-sm-offset-2">
            <div class="form-group">
              <label for="idpendaftaran">ID Pendaftaran</label>
              <input type="text" name="idpendaftaran" class="form-control" placeholder="ID Pendaftaran">
            </div>
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" name="nik" class="form-control" placeholder="Masukan NIK">
            </div>
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" name="namalengkap" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="username">User Name</label>
              <input type="text" name="username" class="form-control" placeholder="Masukan User Name">
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select class="form-control" name="jk">
                <option>-- Pilih Jenis Kelamin --</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukan Email">
            </div>
            <div class="form-group">
              <label for="nohp">No. Hp</label>
              <input type="text" name="nohp" class="form-control" placeholder="Masukan Nomor HP">
            </div>
            <div class="form-group">
              <label>Status Petugas</label>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input" required="required" type="radio" name="stts" id="inlineRadio1" value="pelapor"> Pelapor
                  </label>
                </div>
            </div>
            <div class="form-group">
              <label>Ingat USERNAME dan NIK sebagai Password Login Anda !!!</label>
            </div>
            <button type="submit" class="btn btn-success">Daftar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>