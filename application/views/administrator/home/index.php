    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-dashboard"></i> Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>
              <p>DATA SISWA</p>
            </div>
            <div class="icon">
              <i class="ion ion-university"></i>
            </div>
            <a href="<?=base_url('/siswa.html')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>
              <p>DATA GURU</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-briefcase"></i>
            </div>
            <a href="<?=base_url('/guru.html')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>27</h3>
              <p>KESISWAAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <a href="<?=base_url('/kesiswaan.html')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>
              <p>USERS</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="<?=base_url('/users.html')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <?php $this->load->view("/guru/modal_dialog"); ?>