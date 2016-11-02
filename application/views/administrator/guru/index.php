    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-briefcase"></i> Guru
        <small>Manage Data Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Guru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Guru</h3>
              <a href="<?=base_url('/guru/add.html')?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Tambah Guru
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIP</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT, TANGGAL LAHIR</th>
                    <th>NOMOR HP / TELP</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123456789</td>
                    <td>TONI TRI SUPRIADI</td>
                    <td>LAKI-LAKI</td>
                    <td>PURBALINGGA, 1 NOVEMBER 2016</td>
                    <td>+6280 000 000000</td>
                    <td>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>987654321</td>
                    <td>AMRIZAL FATHUROHMAN</td>
                    <td>LAKI-LAKI</td>
                    <td>PURBALINGGA, 2 NOVEMBER 2016</td>
                    <td>+6280 000 000000</td>
                    <td>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>NIP</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TMPAT, TANGGAL LAHIR</th>
                    <th>NOMOR HP / TELP</th>
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