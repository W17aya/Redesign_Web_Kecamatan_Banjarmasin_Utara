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
                <h3 class="card-title">Data Kartu Keluarga</h3>
              </div>

            </div>

            <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                <tr>
                  <th>No</th>
                  <th>No. Kartu Keluarga</th>
                  <th>Nama Kepala Keluarga</th>
                  <th>Status Kartu Keluarga</th>
                  <th>Foto</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $data = mysqli_query($conn,"SELECT * FROM `tb_kk` JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_kk.id_penduduk WHERE status_kk='Kepala Keluarga' GROUP BY no_kk ORDER BY tb_kk.id_kk DESC");
                    while($dataa = mysqli_fetch_array($data)) {
                  ?>

                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $dataa['no_kk'];?></td>
                    <td><?php echo $dataa['nama_penduduk'];?> - <?php echo $dataa['nik'];?></td>
                    <td><?php echo $dataa['status_kk'];?></td>
                    <td><a title="Download File" href="download.php?file=<?php echo $dataa['foto_kk'];?>">Download File KK</a></td>
                    <td align="center">
                      <a class="btn btn-primary btn-sm btn-block" title="Lihat Data Kartu Keluarga" href="lihat2.php?id=<?php echo $dataa['no_kk'];?>"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                <?php }; ?>
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

<?php include '../src/footer.php'; ?>