
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
  

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Konfigurasi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">

                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nomor</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($konfigurasi as $d) {?>
                <tr>
                  <td><?php echo $d->namaweb ?></td>
                  <td><?php echo $d->email ?></td>
                  <td><?php echo $d->nomor ?></td>
                  <td>
                    <a class="btn btn-info btn-xs" href="<?php echo base_url('admin/editKonfigurasi/'.$d->id); ?>"><i class="fa fa-edit"></i></a>
                  </td>
                </tr>
               <?php } ?> 
                <thead>
             
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->