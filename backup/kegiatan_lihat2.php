<?php include 'head.php'; ?>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ignielPelangi">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">


      <div class="container connectedSortable">
        <div class="row">
          <div class="col-lg-8">
            <div class="row connectedSortable">
              <div class="col-lg-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="card-title" style="font-family: sans-serif;"><i class="fa fa-md fa-list fa-fw"></i> SEMUA KEGIATAN</h5>
                  </div>
                  <div class="card-body">
                    <?php 
                      $no=1;
                      $data = mysqli_query($conn,"SELECT * FROM kegiatan ORDER BY kd_kegiatan DESC");
                        while($dataa = mysqli_fetch_array($data)) {
                    ?>
                    <div class="col-md-12">
                      <div class="card flex-md-row box-shadow h-md-250">
                        <img class="card-img-right flex-auto d-md-block img-responsive" src="dist/<?php echo $dataa['foto_kegiatan'];?>" data-src="dist/<?php echo $dataa['foto_kegiatan'];?>" alt="" style="width: 200px; height: auto; object-fit: cover; margin: auto;">
                        <div class="card-body d-flex flex-column align-items-start">
                          <strong class="d-inline-block mb-1 text-primary"><?= $dataa['judul_kegiatan']; ?></strong>
                          <!-- <h6 class="mb-0">
                            <a class="text-dark" href="#"><i class="fa fa-sm fa-user fa-fw"></i> <?= $data->nama_pengguna; ?></a>
                          </h6> -->
                          <div class="mb-1 text-muted"><i class="fa fa-sm fa-clock fa-fw"></i><?= $dataa['tgl_kegiatan']; ?></div>
                          <p class="card-text mb-auto"><?= substr($dataa['isi_kegiatan'], 0,200).'. . .'; ?></p>
                          <a class="btn btn-sm btn-block btn-success" href="kegiatan_lihat.php?id=<?= $dataa['kd_kegiatan']; ?>">Baca Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    <?php };?>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>


  