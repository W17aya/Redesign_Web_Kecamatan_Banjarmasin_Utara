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
                <h3 class="card-title"><b>Nomor Surat Kartu Keluarga : <?php echo $_GET['id'];?></b></h3>
              </div>

            </div>

            <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead align="center">
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Gol. Darah</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Status Perkawinan</th>
                  <th>Kewarganegaraan</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Foto KTP</th>
                </tr>
                </thead>
                <tbody style="text-align: center;">
                  <?php
                    $no = 1;
                    $no_kk = $_GET['id'];
                    $data = mysqli_query($conn,"SELECT * FROM `tb_penduduk` 
                        JOIN tb_pendidikan ON tb_pendidikan.id_pendidikan=tb_penduduk.id_pendidikan
                        JOIN tb_pekerjaan ON tb_pekerjaan.id_pekerjaan=tb_penduduk.id_pekerjaan
                        JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa
                        JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec
                        JOIN tb_kk ON tb_kk.id_penduduk=tb_penduduk.id_penduduk
                        WHERE tb_kk.no_kk='$no_kk'
                        ORDER BY tb_kk.id_kk ASC");
                    while($dataa = mysqli_fetch_array($data)) {
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $dataa['nik'];?></td>
                    <td><?php echo $dataa['nama_penduduk'];?></td>
                    <td><?php echo $dataa['tmp_lahir'];?>, <?php echo date('d-M-Y',strtotime($dataa['tgl_lahir']));?></td>
                    <td><?php echo $dataa['gol_darah'];?></td>
                    <td><?php echo $dataa['jk'];?></td>
                    <td><?php echo $dataa['alamat_lengkap'];?> RT. <?php echo $dataa['rt'];?> RW. <?php echo $dataa['rw'];?> Desa <?php echo $dataa['nama_desa'];?> Kecamatan <?php echo $dataa['nama_kec'];?></td>
                    <td><?php echo $dataa['agama'];?></td>
                    <td><?php echo $dataa['status_perkawinan'];?></td>
                    <td><?php echo $dataa['kewarganegaraan'];?></td>
                    <td><?php echo $dataa['nama_pendidikan'];?></td>
                    <td><?php echo $dataa['nama_pekerjaan'];?></td>
                    <td><a title="Download File" target="_BLANK" href="download.php?file=<?php echo $dataa['foto_ktp'];?>"><?php echo $dataa['foto_ktp'];?></a></td>
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