    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-file"></i> Penilaian
        <small>Laporan Data Penilaian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/laporan.html')?>">Laporan</a></li>
        <li class="active">Penilaian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  
                </div>
              </div>
              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>KELAS</th>
                    <th>TAHUN AJARAN</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12345</td>
                    <td>TONI TRI SUPRIADI</td>
                    <td>X IPA 1</td>
                    <td>2016 / 2017</td>
                    <td><a href="<?=base_url('/laporan/penilaian_view/MTIzNDU.html')?>" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a></td>
                  </tr>
                  <tr>
                    <td>54321</td>
                    <td>AMRIZAL FATHUROHMAN</td>
                    <td>X IPS 1</td>
                    <td>2016 / 2017</td>
                    <td><a href="<?=base_url('/laporan/penilaian_view/NTQzMjE.html')?>" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a></td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>KELAS</th>
                    <th>TAHUN AJARAN</th>
                    <th></th>
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