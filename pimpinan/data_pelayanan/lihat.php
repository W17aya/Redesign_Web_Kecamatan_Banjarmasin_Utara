<?php include '../src/head.php'; ?>
<?php include '../src/menu.php'; ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">

          </div>

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">

            <!-- DIRECT CHAT -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pelayanan</h3>
              </div>

            </div>

            <div class="card">
              <div class="card-header">
                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-flat btn-success btn-sm"><i class="fa fa-print"></i> Cetak Data</button>
              </div>
            <!-- <div class="card-header">
                <div class="row">
                  <div class="col-4">
                    <form action="" method="POST">
                      <div class="form-group">
                         <label>Filter Status Surat</label>
                         <select class="form-control" name="status" onchange="submit()">
                          <option selected="selected" disabled="">--Pilih Status Surat--</option>
                          <option value="Selesai">Selesai</option>
                          <option value="Proses">Proses</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div> -->
            <!-- /.card-header -->
                  <?php
                    $jumlah1 = 0;
                    $jumlah2 = 0;
                    $jumlah6 = 0;
                    $jumlah4 = 0;
                    $jumlah5 = 0;
                    $jumlah6 = 0;
                    $jumlah7 = 0;
                    $jumlah8 = 0;
                    $jumlah9 = 0;

                    $data1 = mysqli_query($conn,"SELECT COUNT(id_domisili) AS jumlah FROM `tb_domisili` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data1)) {
                      $jumlah1 = $dataa['jumlah'];
                    };

                    $data2 = mysqli_query($conn,"SELECT COUNT(id_imb) AS jumlah FROM `tb_imb` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data2)) {
                      $jumlah2 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_izin_usaha) AS jumlah FROM `tb_izin_usaha` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah3 = $dataa['jumlah'];
                    };

                    $data4 = mysqli_query($conn,"SELECT COUNT(id_kehilangan) AS jumlah FROM `tb_kehilangan` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data4)) {
                      $jumlah4 = $dataa['jumlah'];
                    };

                    $data5 = mysqli_query($conn,"SELECT COUNT(id_kelahiran) AS jumlah FROM `tb_kelahiran` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data5)) {
                      $jumlah5 = $dataa['jumlah'];
                    };

                    $data6 = mysqli_query($conn,"SELECT COUNT(id_kematian) AS jumlah FROM `tb_kematian` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data6)) {
                      $jumlah6 = $dataa['jumlah'];
                    };

                    $data7 = mysqli_query($conn,"SELECT COUNT(id_nikah) AS jumlah FROM `tb_nikah` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data7)) {
                      $jumlah7 = $dataa['jumlah'];
                    };

                    $data8 = mysqli_query($conn,"SELECT COUNT(id_pindah) AS jumlah FROM `tb_pindah` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data8)) {
                      $jumlah8 = $dataa['jumlah'];
                    };

                    $data9 = mysqli_query($conn,"SELECT COUNT(id_tidak_mampu) AS jumlah FROM `tb_tidak_mampu` WHERE status='Selesai'");
                    while($dataa = mysqli_fetch_array($data9)) {
                      $jumlah9 = $dataa['jumlah'];
                    };

                    $jumlah11 = 0;
                    $jumlah22 = 0;
                    $jumlah33 = 0;
                    $jumlah44 = 0;
                    $jumlah55 = 0;
                    $jumlah66 = 0;
                    $jumlah77 = 0;
                    $jumlah88 = 0;
                    $jumlah99 = 0;

                    $data11 = mysqli_query($conn,"SELECT COUNT(id_domisili) AS jumlah FROM `tb_domisili` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data11)) {
                      $jumlah11 = $dataa['jumlah'];
                    };

                    $data22 = mysqli_query($conn,"SELECT COUNT(id_imb) AS jumlah FROM `tb_imb` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data22)) {
                      $jumlah22 = $dataa['jumlah'];
                    };

                    $data33 = mysqli_query($conn,"SELECT COUNT(id_izin_usaha) AS jumlah FROM `tb_izin_usaha` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data33)) {
                      $jumlah33 = $dataa['jumlah'];
                    };

                    $data44 = mysqli_query($conn,"SELECT COUNT(id_kehilangan) AS jumlah FROM `tb_kehilangan` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data44)) {
                      $jumlah44 = $dataa['jumlah'];
                    };

                    $data55 = mysqli_query($conn,"SELECT COUNT(id_kelahiran) AS jumlah FROM `tb_kelahiran` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data55)) {
                      $jumlah55 = $dataa['jumlah'];
                    };

                    $data66 = mysqli_query($conn,"SELECT COUNT(id_kematian) AS jumlah FROM `tb_kematian` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data66)) {
                      $jumlah66 = $dataa['jumlah'];
                    };

                    $data77 = mysqli_query($conn,"SELECT COUNT(id_nikah) AS jumlah FROM `tb_nikah` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data77)) {
                      $jumlah77 = $dataa['jumlah'];
                    };

                    $data88 = mysqli_query($conn,"SELECT COUNT(id_pindah) AS jumlah FROM `tb_pindah` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data88)) {
                      $jumlah88 = $dataa['jumlah'];
                    };

                    $data99 = mysqli_query($conn,"SELECT COUNT(id_tidak_mampu) AS jumlah FROM `tb_tidak_mampu` WHERE status='Proses'");
                    while($dataa = mysqli_fetch_array($data99)) {
                      $jumlah99 = $dataa['jumlah'];
                    };

                  ?>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr>
                  <th>No</th>
                  <th>Surat Pelayanan</th>
                  <th>Selesai</th>
                  <th>Proses</th>
                </tr>
                </thead>
                <tbody style="text-align: left; vertical-align: top;">
                  <tr>
                    <td style="text-align: center; vertical-align: middle;">1</td>
                    <td>Izin Usaha</td>
                    <td><?php echo $jumlah3; ?> Surat</td>
                    <td><?php echo $jumlah33; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">2</td>
                    <td>Izin Mendirikan Bangunan</td>
                    <td><?php echo $jumlah2; ?> Surat</td>
                    <td><?php echo $jumlah22; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">3</td>
                    <td>Keterangan Pindah</td>
                    <td><?php echo $jumlah8; ?> Surat</td>
                    <td><?php echo $jumlah88; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">4</td>
                    <td>Keterangan Tidak Mampu</td>
                    <td><?php echo $jumlah9; ?> Surat</td>
                    <td><?php echo $jumlah99; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">5</td>
                    <td>Keterangan Nikah</td>
                    <td><?php echo $jumlah7; ?> Surat</td>
                    <td><?php echo $jumlah77; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">6</td>
                    <td>Keterangan Kelahiran</td>
                    <td><?php echo $jumlah5; ?> Surat</td>
                    <td><?php echo $jumlah55; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">7</td>
                    <td>Keterangan Kematian</td>
                    <td><?php echo $jumlah6; ?> Surat</td>
                    <td><?php echo $jumlah66; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">8</td>
                    <td>Keterangan Kehilangan</td>
                    <td><?php echo $jumlah4; ?> Surat</td>
                    <td><?php echo $jumlah44; ?> Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">9</td>
                    <td>Keterangan Domisili</td>
                    <td><?php echo $jumlah1; ?> Surat</td>
                    <td><?php echo $jumlah11; ?> Surat</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            <!--/.direct-chat -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="cetak.php" method="POST" target="_BLANK">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group">
          <label for="id_ttd">Pilih TTD</label>
          <select class="form-control select2bs4" style="width: 100%;" id="" name="id_ttd" data-placeholder="Pilih ID TTD" required="">
            <?php
            $data = mysqli_query($conn,"SELECT * FROM `tb_ttd`");
            while($dataa = mysqli_fetch_array($data)) {
            ?>
              <option value="<?php echo $dataa['id_ttd'];?>"><?php echo $dataa['nama_ttd'];?> | <?php echo $dataa['jabatan'];?></option>
            <?php };?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary btn-sm">Cetak</button>
      </div>
    </div>
    </form>
  </div>
</div>

<?php include '../src/footer.php'; ?>