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
              <table class="table table-striped">
                <tr>
                  <td width="15%">KELAS</td>
                  <td width="35%">: X</td>
                  <td width="15%">WALI KELAS</td>
                  <td width="35%">: TONI TRI SUPRIADI, S.KOM.</td>
                </tr>
                <tr>
                  <td width="15%">NAMA KELAS</td>
                  <td width="35%">: X IPA 1</td>
                  <td width="15%">JUMLAH SISWA</td>
                  <td width="35%">: 40</td>
                </tr>
              </table>
              <hr />
              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT, TANGGAL LAHIR</th>
                    <th>ORANG TUA / WALI</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12345</td>
                    <td>TONI TRI SUPRIADI</td>
                    <td>LAKI-LAKI</td>
                    <td>PURBALINGGA, 1 November 2016</td>
                    <td>AMRIZAL FATHUROHMAN</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>JENIS KELAMIN</th>
                    <th>TEMPAT, TANGGAL LAHIR</th>
                    <th>ORANG TUA / WALI</th>
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