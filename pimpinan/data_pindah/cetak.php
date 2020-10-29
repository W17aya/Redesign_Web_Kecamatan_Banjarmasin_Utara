<?php
require_once('../../dompdf/dompdf_config.inc.php');
include '../src/koneksi.php';
include '../src/tgl_indo.php';


	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM `tb_pindah` 
		JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_pindah.id_penduduk 
		JOIN tb_ttd ON tb_ttd.id_ttd=tb_pindah.id_ttd 
		JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa
		JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec
		WHERE tb_pindah.id_pindah='$id'");

    while($dataa = mysqli_fetch_array($data)) {
    	$no_surat = $dataa['no_surat'];
    	$nama_ttd = $dataa['nama_ttd'];
    	$jabatan = $dataa['jabatan'];
    	$alamat_ttd = $dataa['alamat_ttd'];


	    $nama_penduduk = $dataa['nama_penduduk'];
	    $nik = $dataa['nik'];
	    $tmp_lahir = $dataa['tmp_lahir'];
	    $tgl_lahir = date('d-M-Y',strtotime($dataa['tgl_lahir']));
	    $jk = $dataa['jk'];
	    $agama = $dataa['agama'];
	    $alamat_lengkap = $dataa['alamat_lengkap'];
	    $nama_desa = $dataa['nama_desa'];
	    $nama_kec = $dataa['nama_kec'];

	    $alamat_pindah = $dataa['alamat_pindah'];
	    $jumlah_pindah = $dataa['jumlah_pindah'];


	    $tgl_permohonan = date('Y-m-d',strtotime($dataa['tgl_permohonan']));
	    $tgl_selesai = tgl_indo($dataa['tgl_selesai']);

    }


$html = 
'<html>
	<head>
	<title>Surat Keterangan Pengantar Pindah Antar Desa</title>
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
	<img src="kop_surat.jpg" width="" height="">
		
	<table border="0" align="center">
		<tbody >
			<tr>
				<td><font style="font-size: 12"><b><u>Surat Keterangan Pengantar Pindah Antar Desa</u></b></font></h5></td>
			</tr>
			<tr align="center">
				<td><font style="font-size: 12">Nomor : '.$no_surat.'</font></td>
			</tr>
		</tbody>
	</table>

	<p style="line-height: 1.5em;">
		<font style="font-size: 12;">
			Yang bertanda tangan dibawah ini :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Nama</font></td>
				<td><font style="font-size: 12">: '.$nama_ttd.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Alamat</font></td>
				<td><font style="font-size: 12">: '.$alamat_ttd.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Jabatan</font></td>
				<td><font style="font-size: 12">: '.$jabatan.'</font></td>
			</tr>
		</tbody>
		</table>
	</p>

	<p style="line-height: 2em;">
		<font style="font-size: 12;">
			Dengan ini menerangkan permohonan pindah penduduk WNI dengan data sebagai berikut :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">No. KTP/NIK</font></td>
				<td><font style="font-size: 12">: '.$nik.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Nama</font></td>
				<td><font style="font-size: 12">: '.$nama_penduduk.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">TTL</font></td>
				<td><font style="font-size: 12">: '.$tmp_lahir.', '.$tgl_lahir.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Jenis Kelamin</font></td>
				<td><font style="font-size: 12">: '.$jk.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Agama</font></td>
				<td><font style="font-size: 12">: '.$agama.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Alamat Sekarang</font></td>
				<td><font style="font-size: 12">: '.$alamat_lengkap.' Desa '.$nama_desa.' Kecamatan '.$nama_kec.'</font></td>
			</tr>

			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Alamat Pindah</font></td>
				<td><font style="font-size: 12">: '.$alamat_pindah.'</font>
				</td>
			</tr>

			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Jml Kelurga yang Pindah</font></td>
				<td><font style="font-size: 12">: '.$jumlah_pindah.' Orang</font>
				</td>
			</tr>

		</tbody>
	</table>
	</p>
	<p style="line-height: 0.2em; text-align: justify;"><br>
	</p>
	<p style="line-height: 1.5em; text-align: justify;">
		<font style="font-size: 12;line-height: 1.5em; text-align: justify;">
			Demikian surat keterangan ini dibuat dengan sebenarnya, agar dapat digunakan sebagaimana mestinya.
		</font>
		<br>
		<p>
		<table border="0" style="line-height: 1.5em;" width="100%">
		<tbody>
			<tr>
				<td>                                                        </td>
				<td style="width: 250px;"><font style="font-size: 12;">Puruk Cahu Seberang, '.$tgl_selesai.'</font></td>
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

$dompdf->set_paper('A4', 'portrait');
//You can use 'letter', 'legal', 'A4', landscape

$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('SrtPindah.pdf', array("Attachment"=>0)); 
?>