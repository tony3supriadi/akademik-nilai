    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-user"></i> Users
        <small>Manage Data Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <a href="<?=base_url('/users/add.html')?>" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Tambah Users
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>AKSES</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Administrator</td>
                    <td>administrator@admin.com</td>
                    <td>Admin</td>
                    <td>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Guru</td>
                    <td>Guru@guru.com</td>
                    <td>Guru</td>
                    <td>
                      <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                      <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <tr>
                    <th>NAMA LENGKAP</th>
                    <th>EMAIL</th>
                    <th>AKSES</th>
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