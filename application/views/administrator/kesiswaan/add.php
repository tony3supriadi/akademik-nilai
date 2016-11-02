    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Kesiswaan
        <small>Create New Kesiswaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/kesiswaan.html')?>"><i class="fa fa-dashboard"></i> Kesiswaan</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="box">
            <form action="" method="POST" class="form-horizontal">
              <div class="box-header">
                <h3 class="box-title">Form Data Kesiswaan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <h5 class="col-md-10 col-xs-offset-1"><b>A. KETERANGAN INFORMASI KELAS</b></h5>
                <hr style="padding: 5px 0; margin: 5px 0;" />
                <div class="form-group">
                  <label for="kode_kelas" class="col-sm-3 control-label">KELAS</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" placeholder="Pilih Kelas dari Data Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kategori_kelas" class="col-sm-3 control-label">WALI KELAS</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="kategori_kelas" name="kategori_kelas" placeholder="Pilih Guru untuk Dijadikan Wali Kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_kelas" class="col-sm-3 control-label">TAHUN AJARAN</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Tahun Ajaran (ex. 2016 / 2017)">
                  </div>
                </div>
                <br />
                <h5 class="col-md-10 col-xs-offset-1">
                  <b>B. KETERANGAN INFORMASI DAFTAR SISWA</b>

                  <button type="button" data-toggle="modal" data-target="#daftar_siswa_modal" class="btn btn-default btn-xs pull-right">
                    <i class="fa fa-plus"></i> &nbsp; SISWA
                  </button>
                </h5>

                <hr style="padding: 5px 0; margin: 5px 0;" />

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>NIS</th>
                      <th>NAMA SISWA</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td align="center">1.</td>
                      <td>12345</td>
                      <td>TONI TRI SUPRIADI</td>
                      <td align="center">
                        <button type="button" class="btn btn-xs btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td align="center">2.</td>
                      <td>54321</td>
                      <td>AMRIZAL FATHUROHAMAN</td>
                      <td align="center">
                        <button type="button" class="btn btn-xs btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i>&nbsp; SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- ./ MODAL -->

    <!-- Modal Daftar Siswa -->
    <div class="modal fade" id="daftar_siswa_modal" tabindex="-1" role="dialog" aria-labelledby="daftar_siswa_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">PILIH SISWA DARI DAFTAR</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-xs-4">
                    <b>TERPILIH : 40 SISWA</b>
                  </div>
                  <div class="col-xs-8">
                    <div class="form-group">
                      <select class="form-control select2" style="padding: 3px 1px">
                        <option selected="selected">X</option>
                        <option>XI</option>
                        <option>XII</option>
                      </select>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
            
            <hr style="padding: 5px 0; margin: 5px 0" />

            <table class="table table-hover">
              <thead>
                <tr>
                  <th>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                  </th>
                  <th>NIS</th>
                  <th>NAMA SISWA</th>
                  <th>NEM</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                  </td>
                  <td>12345</td>
                  <td>TONI TRI SUPRIADI</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>
                    <label>
                      <input type="checkbox" class="flat-red">
                    </label>
                  </td>
                  <td>54321</td>
                  <td>AMRIZAL FATHUROHMAN</td>
                  <td>80</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">BATAL</button>
            <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> TAMBAHKAN</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal -->