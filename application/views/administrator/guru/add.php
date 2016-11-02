    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Guru
        <small>Create New Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/guru.html')?>"><i class="fa fa-dashboard"></i> Guru</a></li>
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
                <h3 class="box-title">FORM : INFORMASI GURU</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <h5 class="col-xs-offset-1"><b>A. KETERANGAN INFORMASI DATA GURU</b></h5>
                  <hr style="padding: 5px 0; margin: 5px 0;" />
                  <div class="form-group">
                    <label for="nama_lengkap" class="col-sm-3 control-label">NAMA LENGKAP</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap GURU">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-sm-3 control-label">JENIS KELAMIN</label>
                    <div class="col-sm-8">
                    <!-- radio -->
                      <label>
                        <input type="radio" name="jenis_kelamin" class="flat-red" value="L"> 
                        Laki - Laki
                      </label> &nbsp;&nbsp;
                      <label>
                        <input type="radio" name="jenis_kelamin" class="flat-red" value="P"> 
                        Perempuan
                      </label>                
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nip" class="col-sm-3 control-label">
                      NIP
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nip" name="nisn" placeholder="Nomor Induk Pegawai (NIP)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nik" class="col-sm-3 control-label">
                      NIK
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan (NIK)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-3 control-label">
                      TEMPAT LAHIR
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Kelahiran Siswa">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir" class="col-sm-3 control-label">
                      TANGGAL LAHIR
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="date_picker" name="tanggal_lahir" placeholder="Tanggal Kelahiran Siswa">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="agama" class="col-sm-3 control-label">AGAMA</label>
                    <div class="col-sm-8">
                    <!-- radio -->
                      <label>
                        <input type="radio" name="agama" class="flat-red" value="Islam"> 
                        Islam
                      </label> &nbsp;
                      <label>
                        <input type="radio" name="agama" class="flat-red" value="Kristen"> 
                        Kristen
                      </label> &nbsp;
                      <label>
                        <input type="radio" name="agama" class="flat-red" value="Hindu"> 
                        Hindu
                      </label> &nbsp;
                      <label>
                        <input type="radio" name="agama" class="flat-red" value="Budha"> 
                        Budha
                      </label>                
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">
                      ALAMAT
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamat" name="alamt" placeholder="Alamat Tempat Tinggal Siswa">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="telp" class="col-sm-3 control-label">
                      TELP / HP
                    </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="telp" name="telp" placeholder="Nomor Telepon / HP yang bisa dihubungi">
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
