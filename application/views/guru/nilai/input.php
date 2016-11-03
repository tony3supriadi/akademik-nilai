    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-database"></i> Input Nilai
        <small>Input Data Nilai : X IPA 1 (BAHASA JAWA)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="")?>">Nilai</a></li>
        <li class="active">Input</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">FORM : INFORMASI INPUT NILAI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <h5 style="padding: 0 10px"><b>A. KETERANGAN INFORMASI KELAS</b></h5>
              <table class="table table-striped">
                <tr>
                  <td width="15%">KELAS</td>
                  <td width="35%">: X IPA 1</td>
                  <td width="15%">NILAI</td>
                  <td width="35%">: TUGAS KE-1</td>
                </tr>
                <tr>
                  <td width="15%">WALI KELAS</td>
                  <td width="35%">: TONI TRI SUPRIADI, S.KOM.</td>
                  <td width="15%">MAPEL</td>
                  <td width="35%">: BAHASA JAWA</td>
                </tr>
              </table>
              <hr />
              <h5 style="padding: 0 10px"><b>B. KETERANGAN INFORMASI INPUT NILAI</b></h5>
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th width="15%">NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th width="10%">NILAI</th>
                    <th>KETERANGAN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12345</td>
                    <td>TONI TRI SUPRIADI</td>
                    <td><input type="text" value="80"  class="form-control text-center"></td>
                    <td><small class="text-green"><b>TUNTAS</b></small></td>
                  </tr>
                  <tr>
                    <td>54321</td>
                    <td>AMRIZAL FATHUROHMAN</td>
                    <td><input type="text" value="" class="form-control text-center"></td>
                    <td><small class="text-red"><b>TIDAK TUNTAS</b></small></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>NIS</th>
                    <th>NAMA LENGKAP</th>
                    <th>NILAI</th>
                    <th>KETERANGAN</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-save"></i> SIMPAN
              </button>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->