<?php
require_once('../../dompdf/dompdf_config.inc.php');
include '../src/koneksi.php';
include '../src/tgl_indo.php';


	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM `tb_kehilangan` 
		JOIN tb_penduduk ON tb_penduduk.id_penduduk=tb_kehilangan.id_penduduk 
		JOIN tb_ttd ON tb_ttd.id_ttd=tb_kehilangan.id_ttd 
		JOIN tb_desa ON tb_desa.id_desa=tb_penduduk.id_desa
		JOIN tb_kecamatan ON tb_kecamatan.id_kec=tb_penduduk.id_kec
		WHERE tb_kehilangan.id_kehilangan='$id'");

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

	    $keperluan = $dataa['keperluan'];
	    $keterangan_kehilangan = $dataa['keterangan_kehilangan'];
	    $tgl_berlaku = tgl_indo($dataa['berlaku']);


	    $tgl_permohonan = date('Y-m-d',strtotime($dataa['tgl_permohonan']));
	    $tgl_selesai = tgl_indo($dataa['tgl_selesai']);

    }


$html = 
'<html>
	<head>
	<title>SURAT KETERANGAN KEHILANGAN</title>
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
				<td><font style="font-size: 12"><b><u>SURAT KETERANGAN KEHILANGAN</u></b></font></h5></td>
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
				<td style="width: 150px;"><font style="font-size: 12">Nama</font></td>
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
			Dengan ini menerangkan dibawah :
		</font>
		<table border="0" style="line-height: 1.5em;">
		<tbody style="vertical-align: top;">
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 150px;"><font style="font-size: 12">No. KTP/NIK</font></td>
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
				<td style="width: 100px;"><font style="font-size: 12">Alamat</font></td>
				<td><font style="font-size: 12">: '.$alamat_lengkap.' Desa '.$nama_desa.' Kecamatan '.$nama_kec.'</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Keperluan</font></td>
				<td><font style="font-size: 12">: '.$keperluan.'.</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Keterangan Hilang</font></td>
				<td><font style="font-size: 12">: '.$keterangan_kehilangan.'.</font></td>
			</tr>
			<tr>
				<td style="width: 15px;"><font style="font-size: 12;"></font></td>
				<td style="width: 100px;"><font style="font-size: 12">Berlaku</font></td>
				<td><font style="font-size: 12">: '.$tgl_berlaku.' s/d '.$tgl_selesai.'</font></td>
			</tr>
		</tbody>
	</table>
	</p>
	
	<p>
		<br>
		<font style="font-size: 12;">
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
$dompdf->stream('SrtKehilangan.pdf', array("Attachment"=>0)); 
?>