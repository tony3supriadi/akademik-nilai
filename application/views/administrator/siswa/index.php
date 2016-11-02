    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-group"></i> Siswa
        <small>Manage Data Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Siswa</h3>
              <a href="<?=base_url('/siswa/add.html')?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Tambah Siswa
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT, TANGGAL LAHIR</th>
                    <th>ORANG TUA / WALI</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12345</td>
                    <td>TONI TRI SUPRIADI</td>
                    <td>LAKI-LAKI</td>
                    <td>PURBALINGGA, 1 November 2016</td>
                    <td>AMRIZAL FATHUROHMAN</td>
                    <td>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT, TANGGAL LAHIR</th>
                    <th>ORANG TUA / WALI</th>
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