<?php include '../src/koneksi.php'; ?>
<?php include '../src/tgl_indo.php'; 

header("Content-type: application/vnd-ms-excel");
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=exportDataKK.xls");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table border="1">
    <thead align="center">
      <tr>
        <th>No</th>
        <th>Nomor KK</th>
        <th>Nomor NIK</th>
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
      </tr>
    </thead>
    <tbody style="text-align: center;">
      <?php
      $no = 1;
      $data = mysqli_query($conn,"SELECT * FROM `tb_penduduk`
        JOIN tb_pendidikan ON tb_pendidikan.id_pendidikan=tb_penduduk.id_pendidikan
        JOIN tb_pekerjaan ON tb_pekerjaan.id_pekerjaan=tb_penduduk.id_pekerjaan
        JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa
        JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec
        JOIN tb_kk ON tb_kk.id_penduduk=tb_penduduk.id_penduduk ORDER BY tb_kk.id_kk ASC");
      while($dataa = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $dataa['no_kk'];?></td>
        <td><?php echo $dataa['nik'];?></td>
        <td><?php echo $dataa['nama_penduduk'];?></td>
        <td><?php echo $dataa['tmp_lahir'];?>, <?php echo tgl_indo($dataa['tgl_lahir']);?></td>
        <td><?php echo $dataa['gol_darah'];?></td>
        <td><?php echo $dataa['jk'];?></td>
        <td><?php echo $dataa['alamat_lengkap'];?> Desa <?php echo $dataa['nama_desa'];?> Kecamatan <?php echo $dataa['nama_kec'];?></td>
        <td><?php echo $dataa['agama'];?></td>
        <td><?php echo $dataa['status_perkawinan'];?></td>
        <td><?php echo $dataa['kewarganegaraan'];?></td>
        <td><?php echo $dataa['nama_pendidikan'];?></td>
        <td><?php echo $dataa['nama_pekerjaan'];?></td>
      </tr>
      <?php }; ?>
    </tbody>
  </table>
</body>
</html>