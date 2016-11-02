    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Users
        <small>Create New Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/users.html')?>"><i class="fa fa-dashboard"></i> Users</a></li>
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
                <h3 class="box-title">FORM : INFORMASI USERS</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <h5 class="col-xs-offset-1"><b>A. KETERANGAN INFORMASI DATA USERS</b></h5>
                  <hr style="padding: 5px 0; margin: 5px 0;" />
                  <div class="form-group">
                    <label for="kode_kelas" class="col-sm-3 control-label">USERNAME</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Username : Informasi login">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kelas" class="col-sm-3 control-label">PASSWORD</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="kelas" name="kelas" placeholder="Password : Informasi Login">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kategori_kelas" class="col-sm-3 control-label">EMAIL</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="kategori_kelas" name="kategori_kelas" placeholder="Email : Informasi Mail Users">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_kelas" class="col-sm-3 control-label">NAMA USERS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Lengkap Users">
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
