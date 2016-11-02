    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-database"></i> Kesiswaan
        <small>Manage Data Kesiswaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kesiswaan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Kesiswaan</h3>
              <a href="<?=base_url('/kesiswaan/add.html')?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Tambah Kesiswaan
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>TAHUN AJARAN</th>
                    <th>NAMA KELAS</th>
                    <th>WALI KELAS</th>
                    <th>JUMLAH SISWA</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2016 / 2017</td>
                    <td>X IPA 1</td>
                    <td>TONI TRI SUPRIADI, S.KOM.</td>
                    <td>40</td>
                    <td>
                      <a href="" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2016 / 2017</td>
                    <td>X IPS 1</td>
                    <td>AMRIZAL FATHUROHMAN, S.KOM.</td>
                    <td>40</td>
                    <td>
                      <a href="" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>KODE KELAS</th>
                    <th>KELAS</th>
                    <th>KATEGORI KELAS</th>
                    <th>NAMA KELAS</th>
                    <th></th>
                  </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->