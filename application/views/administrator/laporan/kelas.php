    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-th"></i> Kelas
        <small>Laporan Data Kelas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/laporan.html')?>">Laporan</a></li>
        <li class="active">Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Kelas</h3>
              <a href="" class="btn btn-primary pull-right">
                <i class="fa fa-print"></i> PRINT
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>KODE KELAS</th>
                    <th>KELAS</th>
                    <th>KATEGORI KELAS</th>
                    <th>NAMA KELAS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>KLS0001</td>
                    <td>X</td>
                    <td>IPA</td>
                    <td>X IPA 1</td>
                  </tr>
                  <tr>
                    <td>KLS0002</td>
                    <td>X</td>
                    <td>IPS</td>
                    <td>X IPS 1</td>
                  </tr>
                  <tr>
                    <td>KLS0003</td>
                    <td>XI</td>
                    <td>IPA</td>
                    <td>XI IPA 1</td>
                  </tr>
                  <tr>
                    <td>KLS0004</td>
                    <td>XI</td>
                    <td>IPS</td>
                    <td>XI IPS 1</td>
                  </tr>
                  <tr>
                    <td>KLS0005</td>
                    <td>XII</td>
                    <td>IPA</td>
                    <td>XII IPA 1</td>
                  </tr>
                  <tr>
                    <td>KLS0006</td>
                    <td>XII</td>
                    <td>IPS</td>
                    <td>XII IPS 1</td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>KODE KELAS</th>
                    <th>KELAS</th>
                    <th>KATEGORI KELAS</th>
                    <th>NAMA KELAS</th>
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