    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-database"></i> Penilaian
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
              <h3 class="box-title">Tabel Data Penilaian</h3>
              <a href="" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> PRINT
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <tr>
                  <td width="15%">NIS</td>
                  <td width="35%">: 12345</td>
                  <td width="15%">KELAS</td>
                  <td width="35%">: X IPA 1</td>
                </tr>
                <tr>
                  <td width="15%">NAMA LENGKAP</td>
                  <td width="35%">: TONI TRI SUPRIADI</td>
                  <td width="15%">TAHUN AJARAN</td>
                  <td width="35%">: 2016 / 2017</td>
                </tr>
                <tr>
                  <td width="15%">JENIS KELAMIN</td>
                  <td width="35%">: LAKI-LAKI</td>
                  <td width="15%">SEMESTER</td>
                  <td width="35%">: GANJIL</td>
                </tr>
              </table>

              <hr />

              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>MATA PELAJARAN</th>
                    <th>TH1</th>
                    <th>TH2</th>
                    <th>U1</th>
                    <th>U2</th>
                    <th>U3</th>
                    <th>U4</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>RAPOT</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PEND. AGAMA ISLAM</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                  </tr>
                  <tr>
                    <td>BAHASA INDONESIA</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                  </tr>
                  <tr>
                    <td>FISIKA</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                    <td>80</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>MATA PELAJARAN</th>
                    <th>TH1</th>
                    <th>TH2</th>
                    <th>U1</th>
                    <th>U2</th>
                    <th>U3</th>
                    <th>U4</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>RAPOT</th>
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