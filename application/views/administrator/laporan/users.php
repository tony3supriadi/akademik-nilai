    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Users
        <small>Laporan Data Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_url('/laporan.html')?>">Laporan</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Users</h3>
              <a href="" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> PRINT
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-report" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>AKSES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Administrator</td>
                    <td>administrator@admin.com</td>
                    <td>Admin</td>
                  </tr>
                  <tr>
                    <td>Guru</td>
                    <td>Guru@guru.com</td>
                    <td>Guru</td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>AKSES</th>
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