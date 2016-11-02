    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Kelas
        <small>Create New Kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/kelas.html')?>"><i class="fa fa-dashboard"></i> Kelas</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="box">
            <form action="" method="POST" class="form-horizontal">
              <div class="box-header text-center">
                <h3 class="box-title">FORM : INFORMASI KELAS</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <h5 class="col-xs-offset-1"><b>A. KETERANGAN INFORMASI DATA KELAS</b></h5>
                  <hr style="padding: 5px 0; margin: 5px 0;" />
                  <div class="form-group">
                    <label for="kode_kelas" class="col-sm-3 control-label">KODE KELAS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Kode Kelas">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kelas" class="col-sm-3 control-label">KELAS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas : X / XI / XII">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kategori_kelas" class="col-sm-3 control-label">KATEGORI KELAS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kategori_kelas" name="kategori_kelas" placeholder="Kategori Kelas : IPA / IPS">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_kelas" class="col-sm-3 control-label">NAMA KELAS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas (ex. XII IPA 1)">
                    </div>
                  </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp; SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
