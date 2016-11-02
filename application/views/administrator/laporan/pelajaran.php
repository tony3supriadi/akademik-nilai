    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-book"></i> Pelajaran
        <small>Laporan Data Pelajaran</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/laporan.html')?>">Laporan</a></li>
        <li class="active">Pelajaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Pelajaran</h3>
              <a href="" class="btn btn-primary pull-right">
                <i class="fa fa-print"></i> PRINT
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>KODE MAPEL</th>
                    <th>NAMA MATA PELAJARAN</th>
                    <th>TAHUN AJARAN</th>
                    <th>KATEGORI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PEL0001</td>
                    <td>MATEMATIKA</td>
                    <td>2016 / 2017</td>
                    <td>MIPA</td>
                  </tr>
                  <tr>
                    <td>PEL0002</td>
                    <td>BAHASA INDONESIA</td>
                    <td>2016 / 2017</td>
                    <td>BAHASA</td>
                  </tr>
                  <tr>
                    <td>PEL0003</td>
                    <td>SOSIOLOGI</td>
                    <td>2016 / 2017</td>
                    <td>SOSIAL</td>
                  </tr>
                  <tr>
                    <td>PEL0004</td>
                    <td>PENDIDIKAN AGAMA ISLAM</td>
                    <td>2016 / 2017</td>
                    <td>UMUM</td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>KODE MAPEL</th>
                    <th>NAMA MATA PELAJARAN</th>
                    <th>TAHUN AJARAN</th>
                    <th>KATEGORI</th>
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