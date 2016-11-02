    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Pelajaran
        <small>Create New Pelajaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/pelajaran.html')?>"><i class="fa fa-dashboard"></i> Pelajaran</a></li>
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
                <h3 class="box-title">FORM : INFORMASI PELAJARAN</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <h5 class="col-xs-offset-1"><b>A. KETERANGAN INFORMASI DATA PELAJAAN</b></h5>
                  <hr style="padding: 5px 0; margin: 5px 0;" />
                  <div class="form-group">
                    <label for="kode_mapel" class="col-sm-3 control-label">KODE MAPEL</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" placeholder="Kode Mata Pelajaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_mapel" class="col-sm-3 control-label">MATA PELAJARAN</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Nama Mata Pelajaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nik" class="col-sm-3 control-label">KATEGORI</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="Kategori Mata Pelajaran">
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
