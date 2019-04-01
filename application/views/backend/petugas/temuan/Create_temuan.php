
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-plus"></i> <i class="fa fa-book"></i> Tambah Temuan</h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
   <div class="box-body">
    <!--show error message here -->
    <div class="form-group"></div>
	<form class="form-horizontal" method="post"  action="<?php echo base_url(); ?>petugas/Temuan/create" role="form">
              <div class="form-group">
                 <label class="col-sm-2 control-label">ID Penemuan</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="idpenemuan" placeholder="ID Penemuan" required="required" >
                </div>
              </div>
                <div class="form-group">
                 <label class="col-sm-2 control-label">No. Surat Kehilangan</label>
                 <div class="col-sm-5">
                <select  name="nosurat" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
              <option value="">&nbsp;</option>
              <?php foreach($surat_no->result_array() as $op)
            {
            ?>
            <option value="<?php echo $op['no_surat_kehilangan'];?>"><?php echo $op['no_surat_kehilangan'];?></option>
            <?php
            }
            ?>
            </select>
              </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Temuan</label>
                  <div class="col-sm-4">
                    <input data-provide="datepicker" class="bootstrap-datepicker" name="tgltemuan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lokasi Temuan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="lokasitemuan" placeholder="Lokasi Temuan" required="required" >
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label">Temuan Polres</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="temuanpolres" placeholder="Temuan Polres" required="required" >
                  </div>
                </div>  
                <div class="form-group">
                  <label class="col-sm-2 control-label">Temuan Polsek</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="temuanpolsek" placeholder="Temuan Polsek" required="required" >
                  </div>
                </div>
                <div class="form-group">
                 <label class="col-sm-2 control-label">Status</label>
                 <div class="col-sm-5">
                <select  name="status" class="js-example-basic-single form-control" data-placeholder="Klik untuk memilih">
              <option value="">&nbsp;</option>
              <option value="Ditemukan">Ditemukan</option>
              <option value="Belum Ditemukan">Belum Ditemukan</option>
            </select>
              </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-5">
                   <textarea class="form-control" name="deskripsi" rows="4" placeholder="Deskripsi" required="required"></textarea>
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
    <div align ="Right"> <a  href="<?php echo base_url(); ?>petugas/Temuan"  class="btn btn-danger" role="button" data-toggle="tooltip" title="Kembali"></i>Back</a></div>
  </td>
  </div>
  <div class="box-footer">
    
  </div><!-- box-footer -->
</div><!-- /.box -->