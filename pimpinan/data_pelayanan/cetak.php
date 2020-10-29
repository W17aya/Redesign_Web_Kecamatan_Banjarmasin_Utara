<?php
require_once('../../dompdf/dompdf_config.inc.php');
include '../src/koneksi.php';
include '../src/tgl_indo.php';
	
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

    $data2 = mysqli_query($conn,"SELECT * FROM `tb_ttd` WHERE id_ttd='$_POST[id_ttd]'");

    while($dataa = mysqli_fetch_array($data2)) {
    	$jabatan = $dataa['jabatan'];
    	$nama_ttd = $dataa['nama_ttd'];
    };

$html = 
'<html>
	<head>
	<title>DATA PELAYANAN</title>
	<style type="text/css">
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
	@page {
		margin: 0cm 0cm;
	}
	body {
		margin-top: 1cm;
		margin-left: 2cm;
		margin-right: 2cm;
		margin-bottom: 2cm;
	}
	</style>
</head>
<body>
	<img src="kop_surat.jpg" width="100%" height="110px">
		
	<table border="0" align="center">
		<tbody align="center">
			<tr>
				<td><font style="font-size: 12"><b>DATA PELAYANAN</b></font></h5></td>
			</tr>
			<tr>
				<td><font style="font-size: 12"><b>KELURAHAN PURUK CAHU SEBERANG</b></font></h5></td>
			</tr>
			<tr>
				<td><font style="font-size: 12"><b>TAHUN 2020</b></font></h5></td>
			</tr>
		</tbody>
	</table>
	<table border="1" align="center" width="100%">
		<thead align="center">
            <tr>
            <th>No</th>
            <th>Surat Pelayanan</th>
            <th>Selesai</th>
            <th>Proses</th>
            </tr>
        </thead>
        <tbody style="text-align: left;vertical-align: top;">
        		<tr>
                    <td style="text-align: center; vertical-align: middle;">1</td>
                    <td>Izin Usaha</td>
                    <td>'.$jumlah3.' Surat</td>
                    <td>'.$jumlah33.' Surat</td>
                </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">2</td>
                    <td>Izin Mendirikan Bangunan</td>
                    <td>'.$jumlah2.' Surat</td>
                    <td>'.$jumlah22.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">3</td>
                    <td>Keterangan Pindah</td>
                    <td>'.$jumlah8.' Surat</td>
                    <td>'.$jumlah88.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">4</td>
                    <td>Keterangan Tidak Mampu</td>
                    <td>'.$jumlah9.' Surat</td>
                    <td>'.$jumlah99.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">5</td>
                    <td>Keterangan Nikah</td>
                    <td>'.$jumlah7.' Surat</td>
                    <td>'.$jumlah77.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">6</td>
                    <td>Keterangan Kelahiran</td>
                    <td>'.$jumlah5.' Surat</td>
                    <td>'.$jumlah55.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">7</td>
                    <td>Keterangan Kematian</td>
                    <td>'.$jumlah6.' Surat</td>
                    <td>'.$jumlah66.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">8</td>
                    <td>Keterangan Kehilangan</td>
                    <td>'.$jumlah4.' Surat</td>
                    <td>'.$jumlah44.' Surat</td>
                  </tr>

                  <tr>
                    <td style="text-align: center; vertical-align: middle;">9</td>
                    <td>Keterangan Domisili</td>
                    <td>'.$jumlah1.' Surat</td>
                    <td>'.$jumlah11.' Surat</td>
                  </tr>
           	</tbody>
    </table>
	
	<p>
		<table border="0" style="line-height: 1.5em;" width="100%">
		<tbody>
			<tr>
				<td>                                                        </td>
				<td style="width: 280px;"><font style="font-size: 12;">Puruk Cahu Seberang, '.tgl_indo(date('Y-m-d')).'</font></td>
			</tr>
			<tr>
				<td></td>
				<td><font style="font-size: 12;">'.$jabatan.',</font></td>
			</tr>
			<tr>
				<td></td>
				<td><br><br><br></td>
			</tr>
			<tr>
				<td></td>
				<td><font style="font-size: 12">'.$nama_ttd.'</font></td>
			</tr>
		</tbody>
		</p>	
	</p>


</body>
</html>
';

$dompdf = new dompdf();

$dompdf->set_paper('A4', 'potrait');
//You can use 'letter', 'legal', 'A4', landscape

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('SrtDomisili.pdf', array("Attachment"=>0)); 
?>