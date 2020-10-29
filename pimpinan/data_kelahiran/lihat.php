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
                <h3 class="card-title">Data Kelahiran</h3>
              </div>

            </div>

            <div class="card">
            <div class="card-header">
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
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead align="center">
                <tr>
                  <th>No</th>
                  <th>No. Surat</th>
                  <th>Nama Ibu - NIK</th>
                  <th>Nama Kelahiran Anak</th>
                  <th>Jenis Kelamin Anak</th>
                  <th>Tempat Lahir Anak</th>
                  <th>Tanggal Lahir Anak</th>
                  <th>Jam</th>
                  <th>Nama Ayah</th>
                  <th>Anak Ke</th>
                  <th>Tanggal Permohonan</th>
                  <th>Tanggal Selesai</th>
                  <th>TTD</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody style="text-align: left; vertical-align: top;">
                  <?php
                    $no = 1;
                    if (isset($_POST['status'])) {
                      $status = $_POST['status'];
                      $data = mysqli_query($conn,"SELECT * FROM `tb_kelahiran` JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_kelahiran.id_penduduk JOIN tb_ttd ON tb_ttd.id_ttd=tb_kelahiran.id_ttd WHERE status='$status' ORDER BY tb_kelahiran.id_kelahiran DESC");
                    } else {
                      $data = mysqli_query($conn,"SELECT * FROM `tb_kelahiran` JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_kelahiran.id_penduduk JOIN tb_ttd ON tb_ttd.id_ttd=tb_kelahiran.id_ttd ORDER BY tb_kelahiran.id_kelahiran DESC");
                    };

                    
                    while($dataa = mysqli_fetch_array($data)) {
                  ?>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;"><?php echo $no++;?></td>
                    <td><?php echo $dataa['no_surat'];?></td>
                    <td><?php echo $dataa['nama_penduduk'];?> - <?php echo $dataa['nik'];?></td>
                    <td><?php echo $dataa['nama_kelahiran'];?></td>
                    <td><?php echo $dataa['jk_k'];?></td>
                    <td><?php echo $dataa['tmp_lahir_k'];?></td>
                    <td><?php echo date('d-M-Y',strtotime($dataa['tgl_lahir_k']));?></td>
                    <td><?php echo $dataa['jam_k'];?></td>
                    <td><?php echo $dataa['nama_ayah'];?></td>
                    <td><?php echo $dataa['anak_ke'];?></td>
                    <td><?php echo date('d-M-Y',strtotime($dataa['tgl_permohonan']));?></td>
                    <td>
                      <?php 
                        if ($dataa['tgl_selesai']==NULL) {
                          echo "";
                        } else {
                          echo date('d-M-Y',strtotime($dataa['tgl_selesai']));
                        }
                      ?>  
                    </td>
                    <td><?php echo $dataa['nama_ttd'];?> - <?php echo $dataa['jabatan'];?></td>
                    <td><?php echo $dataa['status'];?></td>
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