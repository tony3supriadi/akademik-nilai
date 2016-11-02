    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-database"></i> Kesiswaan
        <small>Laporan Data Kesiswaan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/laporan.html')?>">Laporan</a></li>
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
              <a href="" class="btn btn-primary pull-right">
                <i class="fa fa-print"></i> PRINT
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-report" class="table table-bordered table-striped">
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
                    <td><a href="<?=base_url('/laporan/kesiswaan_view/MjAxNiAvIDIwMTcgJiYgS0xTMDAwMSAmJiAxMjM0NTY3ODk.html')?>" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a></td>
                  </tr>
                  <tr>
                    <td>2016 / 2017</td>
                    <td>X IPS 1</td>
                    <td>AMRIZAL FATHUROHMAN, S.KOM.</td>
                    <td>40</td>
                    <td><a href="<?=base_url('/laporan/kesiswaan_view/MjAxNiAvIDIwMTcgJiYgS0xTMDAwMSAmJiAxMjM0NTY3ODk.html')?>" class="btn btn-xs btn-info"><i class="fa fa-search"></i></a></td>
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