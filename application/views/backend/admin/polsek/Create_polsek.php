
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Tambah Polsek</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">
    <!--show error message here -->
    <div class="form-group"></div>
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>admin/Polsek/create" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Id Polsek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="idpolsek" placeholder="IDPolsek" required="required" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Polsek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="namapolsek" placeholder="Nama Polsek" required="required" >
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pass" placeholder="Password(sebagai password login)" required="required" >
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-5">
                   <textarea class="form-control" name="alamat" rows="4" placeholder="Alamat" required="required"></textarea>
                  </div>
                </div>             
                 <div class="form-group">
                  <label class="col-sm-2 control-label">HP</label>
                  <div class="col-sm-4">
                    <input type="text" maxlength="15" required="required" class="form-control" name="hp" placeholder="No hp" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Petugas</label>
                  <div class="col-sm-4">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" required="required" type="radio" name="stts" id="inlineRadio2" value="petugas"> Polsek
                      </label>
                    </div>
                  </div>
                </div>
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4">
                  <div class="btn-group">
                   <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i>Reset</button>
				</div>
                   <div class="btn-group">
                   <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
  </div>
  <div class="box-footer">
  <td>
    <div align ="Right"> <a  href="<?php echo base_url(); ?>admin/Polsek"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    
  </div><!-- box-footer -->
</div><!-- /.box -->