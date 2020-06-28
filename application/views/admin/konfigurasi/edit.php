
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Konfigurasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form"> -->
                <?php 
                  $name = array(
                    'name' =>'editKonfigurasi',
                    'class' => 'form-horizontal'
                  );
                  echo form_open('admin/editKonfigurasi/'.$konfigurasi->id, $name);
                 ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Web</label>
                    <input type="text" name="namaweb" value="<?php echo $konfigurasi->namaweb ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $konfigurasi->email ?>" id="exampleInputPassword1" placeholder="Email">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" value="<?php echo $konfigurasi->alamat ?>" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $konfigurasi->keterangan ?>" id="exampleInputPassword1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Meta</label>
                    <input type="text" name="meta" value="<?php echo $konfigurasi->meta ?>" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputPassword1">Nomor</label>
                    <input type="text" name="nomor" value="<?php echo $konfigurasi->nomor ?>" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">keywords</label>
                    <input type="text" name="keywords" class="form-control" value="<?php echo $konfigurasi->keywords ?>" id="exampleInputPassword1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">facebook</label>
                    <input type="text" name="facebook" value="<?php echo $konfigurasi->facebook ?>" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="<?php echo $konfigurasi->instagram ?>" id="exampleInputPassword1" placeholder="Email">
                  </div>
             
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->