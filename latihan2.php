<?php 
 include_once 'layout/header.php';
 
 ?>
  <?php 
 include_once 'layout/sidebar.php';
 ?>
 

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper bg-dark">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pembelian</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1.000.354</h3>
                
                <p>New Orders</p>
              </div>
              <div class="icon">
              <i class="bi bi-gift-fill"></i>
              </div>
              <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2.036.709<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
              <i class="bi bi-graph-up"></i>
              </div>
              <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>7.000.000</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
              <i class="bi bi-people-fill"></i>
              </div>
              <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>6.890.356</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
              <i class="bi bi-globe-central-south-asia"></i>
              </div>
              <a href="#" class="small-box-footer">Lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Pengguna yang aktif saat ini
                </h3>

                <div class="card-tools">
                  Real time
                  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div id="interactive" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
    </section>
            <!-- /.card -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include_once 'layout/footer.php'; ?>