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
      <?php if ($id == "QmFoYXNhIEphd2E") { ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : X IPA 1 <br /> <sup>(BAHASA JAWA)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-success"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-success" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : X IPA 2 <br /> <sup>(BAHASA JAWA)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-primary"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : X IPA 3 <br /> <sup>(BAHASA JAWA)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-warning"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : X IPA 4 <br /> <sup>(BAHASA JAWA)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-info"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-info" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php } else { ?>
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : XI IPA 1 <br /> <sup>(BAHASA JERMAN)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-warning"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : XI IPA 2 <br /> <sup>(BAHASA JERMAN)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-success"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-success" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>40</h3>
              <p>KELAS : XI IPA 3 <br /> <sup>(BAHASA JERMAN)</sup></p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            <div class="small-box-footer text-center">
              <a href="" class="btn btn-xs btn-primary"><i class="fa fa-file-archive-o"></i></a>
              <a href="" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#pilih_penilaian_modal">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <?php $this->load->view("/guru/modal_dialog"); ?>